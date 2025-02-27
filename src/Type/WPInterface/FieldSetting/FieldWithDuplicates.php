<?php
/**
 * GraphQL Interface for a FormField with the `duplicate_setting` setting.
 *
 * @package WPGraphQL\GF\Type\Interface\FieldSetting
 * @since  @todo
 */

namespace WPGraphQL\GF\Type\WPInterface\FieldSetting;

/**
 * Class - FieldWithDuplicates
 */
class FieldWithDuplicates extends AbstractFieldSetting {
	/**
	 * Type registered in WPGraphQL.
	 *
	 * @var string
	 */
	public static string $type = 'GfFieldWithDuplicatesSetting';

	/**
	 * The name of GF Field Setting
	 *
	 * @var string
	 */
	public static string $field_setting = 'duplicate_setting';

	/**
	 * {@inheritDoc}
	 */
	public static function get_fields() : array {
		return [
			'shouldAllowDuplicates' => [
				'type'        => 'Boolean',
				'description' => __( 'Determines if the field allows duplicate submissions.', 'wp-graphql-gravity-forms' ),
				'resolve'     => fn( $source ) => empty( $source->noDuplicates ),
			],
		];
	}
}
