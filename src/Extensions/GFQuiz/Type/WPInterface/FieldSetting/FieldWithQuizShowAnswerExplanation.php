<?php
/**
 * GraphQL Interface for a FormField with the `gquiz-setting-show-answer-explanation` setting.
 *
 * @package  WPGraphQL\GF\Extensions\GFQuiz\Type\WPInterface\FieldSetting
 * @since  @todo
 */

namespace WPGraphQL\GF\Extensions\GFQuiz\Type\WPInterface\FieldSetting;

use WPGraphQL\GF\Type\WPInterface\FieldSetting\AbstractFieldSetting;

/**
 * Class - FieldWithQuizShowAnswerExplanation
 */
class FieldWithQuizShowAnswerExplanation extends AbstractFieldSetting {
	/**
	 * Type registered in WPGraphQL.
	 *
	 * @var string
	 */
	public static string $type = 'GfFieldWithQuizShowAnswerExplanation';

	/**
	 * The name of GF Field Setting
	 *
	 * @var string
	 */
	public static string $field_setting = 'gquiz-setting-show-answer-explanation';

	/**
	 * {@inheritDoc}
	 */
	public static function get_fields() : array {
		return [
			'answerExplanation'           => [
				'type'        => 'String',
				'description' => __( 'The explanation for the correct answer and/or incorrect answers.', 'wp-graphql-gravity-forms' ),
				'resolve'     => fn ( $source ) : ?string => ! empty( $source->gquizAnswerExplanation ) ? $source->gquizAnswerExplanation : null,
			],
			'shouldShowAnswerExplanation' => [
				'type'        => 'Boolean',
				'description' => __( 'Whether to show an answer explanation.', 'wp-graphql-gravity-forms' ),
				'resolve'     => fn( $source ) : bool => ! empty( $source->gquizShowAnswerExplanation ),
			],
		];
	}
}
