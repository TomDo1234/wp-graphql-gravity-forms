<?php
/**
 * Test PostCategoryMultiSelectField.
 *
 * @package Tests\WPGraphQL\GF
 */

use Tests\WPGraphQL\GF\TestCase\FormFieldTestCase;
use Tests\WPGraphQL\GF\TestCase\FormFieldTestCaseInterface;

/**
 * Class -PostCategoryMultiSelectFieldTest
 */
class PostCategoryMultiSelectFieldTest extends FormFieldTestCase implements FormFieldTestCaseInterface {
	public int $cat_id_1;
	public int $cat_id_2;

	public function setUp(): void {
		// Before...
		$this->cat_id_1 = self::factory()->category->create();
		$this->cat_id_2 = self::factory()->category->create();
		parent::setUp();

		$this->clearSchema();
	}

	public function tearDown() : void {
		wp_delete_category( $this->cat_id_1 );
		wp_delete_category( $this->cat_id_2 );
		parent::tearDown();
	}

	/**
	 * Tests the field properties and values.
	 */
	public function testField(): void {
		$this->runTestField();
	}
	/**
	 * Tests submitting the field values as a draft entry with submitGfForm.
	 */
	public function testSubmitDraft(): void {
		$this->runTestSubmitDraft();
	}
	/**
	 * Tests submitting the field values as an entry with submitGfForm.
	 */
	public function testSubmit(): void {
		$this->runTestSubmit();
	}
	/**
	 * Tests updating the field value with updateGfEntry.
	 */
	public function testUpdate(): void {
		$this->runTestUpdate();
	}
	/**
	 * Tests updating the draft field value with updateGfEntry.
	 */
	public function testUpdateDraft():void {
		$this->runTestUpdateDraft();
	}

	/**
	 * Sets the correct Field Helper.
	 */
	public function field_helper() {
		return $this->tester->getPropertyHelper( 'PostCategoryField' );
	}

	/**
	 * Generates the form fields from factory. Must be wrappend in an array.
	 */
	public function generate_fields() : array {
			return [
				$this->factory->field->create(
					array_merge(
						$this->property_helper->values,
						[ 'inputType' => 'multiselect' ],
						[
							'choices' => [
								[
									'text'       => self::factory()->category->get_object_by_id( $this->cat_id_1 )->name,
									'value'      => (string) self::factory()->category->get_object_by_id( $this->cat_id_1 )->term_id,
									'isSelected' => false,
								],
								[
									'text'       => self::factory()->category->get_object_by_id( $this->cat_id_2 )->name,
									'value'      => (string) self::factory()->category->get_object_by_id( $this->cat_id_2 )->term_id,
									'isSelected' => false,
								],
								[
									'text'       => 'Uncategorized',
									'value'      => '1',
									'isSelected' => true,
								],
							],
						],
					)
				),
			];
	}

	/**
	 * The value as expected in GraphQL.
	 */
	public function field_value() {
		return [
			$this->fields[0]['choices'][0]['text'] . ':' . $this->fields[0]['choices'][0]['value'],
			$this->fields[0]['choices'][1]['text'] . ':' . $this->fields[0]['choices'][1]['value'],
		];
	}

	/**
	 * The graphql field value input.
	 */
	public function field_value_input() {
		return [
			$this->fields[0]['choices'][0]['value'],
			$this->fields[0]['choices'][1]['value'],
		];
	}
	/**
	 * The graphql field value input.
	 */
	public function updated_field_value_input() {
		return [ $this->fields[0]['choices'][2]['value'] ];
	}


	/**
	 * The value as expected in GraphQL when updating from field_value().
	 */
	public function updated_field_value() {
		return [
			$this->fields[0]['choices'][2]['text'] . ':' . $this->fields[0]['choices'][2]['value'],
		];
	}

	/**
	 * The value as expected by Gravity Forms.
	 */
	public function value() {
		return [
			$this->fields[0]['id'] => $this->fields[0]->to_string( $this->field_value ),
		];
	}


	/**
	 * The GraphQL query string.
	 *
	 * @return string
	 */
	public function field_query():string {
		return '
			... on PostCategoryField {
				adminLabel
				canPrepopulate
				choices {
					isSelected
					text
					value
				}
				conditionalLogic {
					actionType
					logicType
					rules{
						fieldId
						operator
						value
					}
				}
				cssClass
				description
				descriptionPlacement
				dropdownPlaceholder
				errorMessage
				hasAllCategories
				hasChoiceValue
				inputName
				isRequired
				label
				labelPlacement
				pageNumber
				personalData {
					isIdentificationField
					shouldErase
					shouldExport
				}
				shouldAllowDuplicates
				size
				... on PostCategoryMultiSelectField {
					hasEnhancedUI
					values
				}
			}
		';
	}

	/**
	 * SubmitForm mutation string.
	 */
	public function submit_form_mutation(): string {
		return 'mutation ($formId: ID!, $fieldId: Int!, $value: [String]!, $draft: Boolean) {
				submitGfForm( input: { id: $formId, saveAsDraft: $draft, fieldValues: {id: $fieldId, values: $value}}) {
					errors {
						id
						message
					}
					entry {
						formFields {
							nodes {
								... on PostCategoryMultiSelectField {
									values
								}
							}
						}
						... on GfSubmittedEntry {
							databaseId
						}
						... on GfDraftEntry {
							resumeToken
						}
					}
				}
			}
		';
	}

	/**
	 * Returns the UpdateEntry mutation string.
	 */
	public function update_entry_mutation(): string {
		return '
			mutation updateGfEntry( $entryId: ID!, $fieldId: Int!, $value: [String]! ){
				updateGfEntry( input: { id: $entryId, shouldValidate: true, fieldValues: {id: $fieldId, values: $value} }) {
					errors {
						id
						message
					}
					entry {
						formFields {
							nodes {
								... on PostCategoryMultiSelectField {
									values
								}
							}
						}
					}
				}
			}
		';
	}

	/**
	 * Returns the UpdateDraftEntry mutation string.
	 */
	public function update_draft_entry_mutation(): string {
		return '
			mutation updateGfDraftEntry( $resumeToken: ID!, $fieldId: Int!, $value: [String]! ){
				updateGfDraftEntry( input: {id: $resumeToken, idType: RESUME_TOKEN, shouldValidate: true, fieldValues: {id: $fieldId, values: $value} }) {
					errors {
						id
						message
					}
					entry: draftEntry {
						formFields {
							nodes {
								... on PostCategoryMultiSelectField {
									values
								}
							}
						}
					}
				}
			}
		';
	}

	/**
	 * The expected WPGraphQL field response.
	 *
	 * @param array $form the current form instance.
	 */
	public function expected_field_response( array $form ): array {
		$expected   = $this->getExpectedFormFieldValues( $form['fields'][0] );
		$expected[] = $this->expected_field_value( 'values', $this->field_value );

		return [
			$this->expectedObject(
				'gfEntry',
				[
					$this->expectedObject(
						'formFields',
						[
							$this->expectedNode(
								'nodes',
								$expected,
								0
							),
						]
					),
				]
			),
		];
	}

	/**
	 * The expected WPGraphQL mutation response.
	 *
	 * @param string $mutationName .
	 * @param mixed  $value .
	 * @return array
	 */
	public function expected_mutation_response( string $mutationName, $value ):array {
		return [
			$this->expectedObject(
				$mutationName,
				[
					$this->expectedObject(
						'entry',
						[
							$this->expectedObject(
								'formFields',
								[
									$this->expectedNode(
										'nodes',
										[
											$this->expected_field_value( 'values', self::NOT_FALSY ),
										]
									),
								]
							),
						]
					),
				]
			),
		];
	}

	/**
	 * Checks if values submitted by GraphQL are the same as whats stored on the server.
	 *
	 * @param array $actual_entry .
	 * @param array $form .
	 */
	public function check_saved_values( $actual_entry, $form ): void {
		$this->assertEquals(
			$this->field_value,
			$form['fields'][0]->to_array( $actual_entry[ $form['fields'][0]['id'] ] ),
			'Submit mutation entry value not equal.'
		);
	}
}
