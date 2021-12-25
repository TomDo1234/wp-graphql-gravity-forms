<?php
/**
 * Mutation - UpdateGfEntry
 *
 * Updates a Gravity Forms entry.
 *
 * @package WPGraphQL\GF\Mutation
 * @since 0.4.0
 */

namespace WPGraphQL\GF\Mutation;

use GFCommon;
use GFFormsModel;
use GraphQL\Error\UserError;
use GraphQL\Type\Definition\ResolveInfo;
use WPGraphQL\AppContext;
use WPGraphQL\GF\Data\Factory;
use WPGraphQL\GF\Type\Enum\EntryStatusEnum;
use WPGraphQL\GF\Type\Input\FormFieldValuesInput;
use WPGraphQL\GF\Type\Input\UpdateEntryMetaInput;
use WPGraphQL\GF\Type\WPObject\Entry\SubmittedEntry;
use WPGraphQL\GF\Type\WPObject\FieldError;
use WPGraphQL\GF\Utils\GFUtils;

/**
 * Class - UpdateEntry
 */
class UpdateEntry extends AbstractMutation {
	/**
	 * Mutation Name
	 *
	 * @var string
	 */
	public static $name = 'updateGfEntry';

	/**
	 * Gravity Forms field validation errors.
	 *
	 * @var array
	 */
	protected static array $errors = [];

	/**
	 * {@inheritDoc}
	 */
	public static function get_input_fields() : array {
		return [
			'id'          => [
				'type'        => [ 'non_null' => 'ID' ],
				'description' => __( 'ID of the entry to delete, either a global or database ID', 'wp-graphql-gravity-forms' ),
			],
			'entryMeta'   => [
				'type'        => UpdateEntryMetaInput::$type,
				'description' => __( 'The entry meta values to update.', 'wp-graphql-gravity-forms' ),
			],
			'fieldValues' => [
				'type'        => [ 'list_of' => FormFieldValuesInput::$type ],
				'description' => __( 'The field ids and their values to update.', 'wp-graphql-gravity-forms' ),
			],
		];
	}

	/**
	 * {@inheritDoc}
	 */
	public static function get_output_fields() : array {
		return [
			'entry'  => [
				'type'        => SubmittedEntry::$type,
				'description' => __( 'The entry that was created.', 'wp-graphql-gravity-forms' ),
				'resolve'     => function( array $payload, array $args, AppContext $context ) {
					if ( ! empty( $payload['errors'] ) || empty( $payload['entryId'] ) ) {
						return null;
					}

					return Factory::resolve_entry( (int) $payload['entryId'], $context );
				},
			],
			'errors' => [
				'type'        => [ 'list_of' => FieldError::$type ],
				'description' => __( 'Field errors.', 'wp-graphql-gravity-forms' ),
			],
		];
	}

	/**
	 * {@inheritDoc}
	 */
	public static function mutate_and_get_payload() : callable {
		return function( $input, AppContext $context, ResolveInfo $info ) : array {
			// Check for required fields.
			static::check_required_inputs( $input );

			// Get the entry.
			$entry_id = self::get_entry_id_from_id( $input['id'] );
			$entry    = GFUtils::get_entry( $entry_id );

			// Check if user has permissions.
			if (
				! GFCommon::current_user_can_any( 'gravityforms_edit_entries' ) &&
				! empty( $entry['created_by'] )
				&& get_current_user_id() !== absint( $entry['created_by'] )
			) {
				throw new UserError( __( 'Sorry, you are not allowed to edit entries', 'wp-graphql-gravity-forms' ) );
			}

			// Prepare the entry data.
			$form = GFUtils::get_form( $entry['form_id'] );

			$entry_data = self::prepare_entry_data( $input, $entry, $form );

			// Return early if field errors.
			if ( ! empty( $entry_data['errors'] ) ) {
				return $entry_data;
			}

			$updated_entry_id = GFUtils::update_entry( $entry_data );

			self::update_post( $updated_entry_id, $form );

			return [
				'entryId' => $updated_entry_id,
			];
		};
	}

	/**
	 * {@inheritDoc}
	 *
	 * @throws UserError .
	 */
	protected static function check_required_inputs( $input = null ) : void {
		if ( ! empty( $input['entryMeta'] ) && empty( $input['fieldValues'] ) ) {
			throw new UserError( __( 'Mutation not processed. No data provided to update.', 'wp-graphql-gravity-forms' ) );
		}
	}

	/**
	 * Prepares entry object for update.
	 *
	 * @param array $input .
	 * @param array $entry .
	 * @param array $form .
	 * @throws UserError .
	 */
	private static function prepare_entry_data( array $input, array $entry, array $form ) : array {
		// Update Field values.
		$field_values = ! empty( $input['fieldValues'] ) ? self::prepare_field_values( $input['fieldValues'], $entry, $form ) : [];
		if ( ! empty( self::$errors ) ) {
			return [ 'errors' => self::$errors ];
		}

		// Update Created by id.
		if ( isset( $input['entryMeta']['createdById'] ) ) {
			if ( ! GFCommon::current_user_can_any( 'gravityforms_edit_entries' ) ) {
				throw new UserError( __( 'Sorry, you do not have permission to change the Entry user', 'wp-graphql-gravity-forms' ) );
			}
			$entry['created_by'] = absint( $input['entryMeta']['createdById'] );
		}

		// Update Date created.
		if ( isset( $input['entryMeta']['dateCreatedGmt'] ) ) {
			$entry['date_created'] = sanitize_text_field( $input['entryMeta']['dateCreatedGmt'] );
		}

		// Update IP.
		if ( isset( $input['entryMeta']['ip'] ) ) {
			$ip          = empty( $form['personalData']['preventIP'] ) ? GFUtils::get_ip( $input['entryMeta']['ip'] ?? '' ) : '';
			$entry['ip'] = ! empty( $ip ) ? sanitize_text_field( $ip ) : $entry['ip'];
		}

		// Update isRead.
		if ( isset( $input['entryMeta']['isRead'] ) ) {
			$entry['is_read'] = ! empty( $input['entryMeta']['isRead'] );
		}

		// Update isStarred.
		if ( isset( $input['entryMeta']['isStarred'] ) ) {
			$entry['is_starred'] = ! empty( $input['entryMeta']['isStarred'] );
		}

		// Update source url.
		if ( isset( $input['entryMeta']['sourceUrl'] ) ) {
			$entry['source_url'] = sanitize_text_field( $input['entryMeta']['sourceUrl'] );
		}

		// Update status.
		if ( isset( $input['entryMeta']['status'] ) ) {
			$entry['status'] = sanitize_text_field( $input['entryMeta']['status'] );
		}

		// Update user agent.
		if ( isset( $input['entryMeta']['userAgent'] ) ) {
			$entry['user_agent'] = sanitize_text_field( $input['entryMeta']['userAgent'] );
		}

		return array_replace(
			$entry,
			$field_values,
		);
	}

	/**
	 * Converts the provided field values into a format that Gravity Forms can understand.
	 *
	 * @param array $field_values .
	 * @param array $entry .
	 * @param array $form .
	 */
	private static function prepare_field_values( array $field_values, array $entry, array $form ) : array {
		$formatted_values = [];

		foreach ( $field_values as $values ) {
			$field = GFUtils::get_field_by_id( $form, $values['id'] );

			$prev_value = $entry[ $values['id'] ] ?? null;

			$value = FormSubmissionHelper::prepare_single_field_value( $values, $field, $prev_value );

			// Signature field requires $_POST['input_{#}'] on update.
			if ( 'signature' === $field->type ) {
				$_POST[ 'input_' . $field->id ] = $value;
			}

			if ( 'post_image' === $field->type ) {
				// String follows pattern: `$url |:| $title |:| $caption |:|$description |:| $alt` .
				$url         = $value[ $field->id . '_0' ];
				$title       = $value[ $field->id . '_1' ];
				$caption     = $value[ $field->id . '_4' ];
				$description = $value[ $field->id . '_7' ];
				$alt         = $value[ $field->id . '_2' ];

				$formatted_values[ (string) $field->id ] = $url . '|:|' . $title . '|:|' . $caption . '|:|' . $description . '|:|' . $alt;
			}

			// Validate the field value.
			FormSubmissionHelper::validate_field_value( $value, $field, $form, self::$errors );

			// Add values to array based on field type.
			$formatted_values = FormSubmissionHelper::add_value_to_array( $formatted_values, $field, $value );
		}

		$formatted_values = self::prepare_field_values_for_save( $formatted_values, $entry, $form );

		return $formatted_values;
	}

	/**
	 * Prepares field values before saving it to the entry.
	 *
	 * @param array $values the entry values.
	 * @param array $entry the existing entry.
	 * @param array $form the existing form.
	 */
	public static function prepare_field_values_for_save( array $values, array $entry, array $form ) : array {
		foreach ( $values as $id => &$value ) {
			$input_name = 'input_' . str_replace( '.', '_', $id );
			$field_id   = strtok( $id, '.' );
			$field      = GFUtils::get_field_by_id( $form, (int) $field_id );

			$value = GFFormsModel::prepare_value( $form, $field, $value, $input_name, $entry['id'], $entry );
		}

		return $values;
	}

	/**
	 * Grabs the updated entry, and then updates the post.
	 *
	 * @param integer $entry_id .
	 * @param array   $form .
	 */
	public static function update_post( int $entry_id, array $form ) : void {
		$entry = GFUtils::get_entry( $entry_id );

		add_filter( 'gform_post_data', [ __CLASS__, 'set_post_id_for_update' ], 10, 3 );
		GFFormsModel::create_post( $form, $entry );
		remove_filter( 'gform_post_data', [ __CLASS__, 'set_post_id_for_update' ] );
	}

	/**
	 * Sets the post id so GFFormsModel::create_post updates the post instead of creating a new one.
	 *
	 * @param array $post_data .
	 * @param array $form .
	 * @param array $entry .
	 */
	public static function set_post_id_for_update( array $post_data, array $form, array $entry ): array {
		$post_data['ID'] = $entry['post_id'];
		return $post_data;
	}
}
