<?php
/**
 * GraphQL Interface for a FormField with the `password_visibility_setting` setting.
 *
 * @package WPGraphQL\GF\Type\Interface\FieldSetting
 * @since  @todo
 */

namespace WPGraphQL\GF\Type\WPInterface\FieldSetting;

/**
 * Class - FieldWithPasswordVisibility
 */
class FieldWithPasswordVisibility extends AbstractFieldSetting {
	/**
	 * Type registered in WPGraphQL.
	 *
	 * @var string
	 */
	public static string $type = 'GfFieldWithPasswordVisibilitySetting';

	/**
	 * The name of GF Field Setting
	 *
	 * @var string
	 */
	public static string $field_setting = 'password_visibility_setting';

	/**
	 * {@inheritDoc}
	 */
	public static function get_fields() : array {
		return [
			'hasPasswordVisibilityToggle' => [
				'type'        => 'Boolean',
				'description' => __( 'Whether the Password visibility toggle should be enabled for this field.', 'wp-graphql-gravity-forms' ),
				'resolve'     => fn( $source ) => ! empty( $source->passwordVisibilityEnabled ),
			],
		];
	}
}
