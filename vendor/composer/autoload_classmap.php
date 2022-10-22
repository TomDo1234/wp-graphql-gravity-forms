<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'WPGraphQL\\GF\\Connection\\AbstractConnection' => $baseDir . '/src/Connection/AbstractConnection.php',
    'WPGraphQL\\GF\\Connection\\EntriesConnection' => $baseDir . '/src/Connection/EntriesConnection.php',
    'WPGraphQL\\GF\\Connection\\FormFieldsConnection' => $baseDir . '/src/Connection/FormFieldsConnection.php',
    'WPGraphQL\\GF\\Connection\\FormsConnection' => $baseDir . '/src/Connection/FormsConnection.php',
    'WPGraphQL\\GF\\CoreSchemaFilters' => $baseDir . '/src/CoreSchemaFilters.php',
    'WPGraphQL\\GF\\Data\\Connection\\EntriesConnectionResolver' => $baseDir . '/src/Data/Connection/EntriesConnectionResolver.php',
    'WPGraphQL\\GF\\Data\\Connection\\FormFieldsConnectionResolver' => $baseDir . '/src/Data/Connection/FormFieldsConnectionResolver.php',
    'WPGraphQL\\GF\\Data\\Connection\\FormsConnectionResolver' => $baseDir . '/src/Data/Connection/FormsConnectionResolver.php',
    'WPGraphQL\\GF\\Data\\EntryObjectMutation' => $baseDir . '/src/Data/EntryObjectMutation.php',
    'WPGraphQL\\GF\\Data\\Factory' => $baseDir . '/src/Data/Factory.php',
    'WPGraphQL\\GF\\Data\\FieldValueInput\\AbstractFieldValueInput' => $baseDir . '/src/Data/FieldValueInput/AbstractFieldValueInput.php',
    'WPGraphQL\\GF\\Data\\FieldValueInput\\AddressValuesInput' => $baseDir . '/src/Data/FieldValueInput/AddressValuesInput.php',
    'WPGraphQL\\GF\\Data\\FieldValueInput\\CaptchaValueInput' => $baseDir . '/src/Data/FieldValueInput/CaptchaValueInput.php',
    'WPGraphQL\\GF\\Data\\FieldValueInput\\CheckboxValuesInput' => $baseDir . '/src/Data/FieldValueInput/CheckboxValuesInput.php',
    'WPGraphQL\\GF\\Data\\FieldValueInput\\ConsentValueInput' => $baseDir . '/src/Data/FieldValueInput/ConsentValueInput.php',
    'WPGraphQL\\GF\\Data\\FieldValueInput\\EmailValuesInput' => $baseDir . '/src/Data/FieldValueInput/EmailValuesInput.php',
    'WPGraphQL\\GF\\Data\\FieldValueInput\\FileUploadValuesInput' => $baseDir . '/src/Data/FieldValueInput/FileUploadValuesInput.php',
    'WPGraphQL\\GF\\Data\\FieldValueInput\\ImageValuesInput' => $baseDir . '/src/Data/FieldValueInput/ImageValuesInput.php',
    'WPGraphQL\\GF\\Data\\FieldValueInput\\ListValuesInput' => $baseDir . '/src/Data/FieldValueInput/ListValuesInput.php',
    'WPGraphQL\\GF\\Data\\FieldValueInput\\NameValuesInput' => $baseDir . '/src/Data/FieldValueInput/NameValuesInput.php',
    'WPGraphQL\\GF\\Data\\FieldValueInput\\ValueInput' => $baseDir . '/src/Data/FieldValueInput/ValueInput.php',
    'WPGraphQL\\GF\\Data\\FieldValueInput\\ValuesInput' => $baseDir . '/src/Data/FieldValueInput/ValuesInput.php',
    'WPGraphQL\\GF\\Data\\Loader\\DraftEntriesLoader' => $baseDir . '/src/Data/Loader/DraftEntriesLoader.php',
    'WPGraphQL\\GF\\Data\\Loader\\EntriesLoader' => $baseDir . '/src/Data/Loader/EntriesLoader.php',
    'WPGraphQL\\GF\\Data\\Loader\\FormsLoader' => $baseDir . '/src/Data/Loader/FormsLoader.php',
    'WPGraphQL\\GF\\Extensions\\Extensions' => $baseDir . '/src/Extensions/Extensions.php',
    'WPGraphQL\\GF\\Extensions\\GFChainedSelects\\Data\\FieldValueInput\\ChainedSelectValuesInput' => $baseDir . '/src/Extensions/GFChainedSelects/Data/FieldValueInput/ChainedSelectValuesInput.php',
    'WPGraphQL\\GF\\Extensions\\GFChainedSelects\\GFChainedSelects' => $baseDir . '/src/Extensions/GFChainedSelects/GFChainedSelects.php',
    'WPGraphQL\\GF\\Extensions\\GFChainedSelects\\Type\\Enum\\ChainedSelectFieldAlignmentEnum' => $baseDir . '/src/Extensions/GFChainedSelects/Type/Enum/ChainedSelectFieldAlignmentEnum.php',
    'WPGraphQL\\GF\\Extensions\\GFChainedSelects\\Type\\Input\\ChainedSelectFieldInput' => $baseDir . '/src/Extensions/GFChainedSelects/Type/Input/ChainedSelectFieldInput.php',
    'WPGraphQL\\GF\\Extensions\\GFChainedSelects\\Type\\WPObject\\FormField\\FieldProperty\\PropertyMapper' => $baseDir . '/src/Extensions/GFChainedSelects/Type/WPObject/FormField/FieldProperty/PropertyMapper.php',
    'WPGraphQL\\GF\\Extensions\\GFChainedSelects\\Type\\WPObject\\FormField\\FieldValue\\ValueProperty' => $baseDir . '/src/Extensions/GFChainedSelects/Type/WPObject/FormField/FieldValue/ValueProperty.php',
    'WPGraphQL\\GF\\Extensions\\GFQuiz\\GFQuiz' => $baseDir . '/src/Extensions/GFQuiz/GFQuiz.php',
    'WPGraphQL\\GF\\Extensions\\GFQuiz\\Type\\Enum\\QuizFieldGradingTypeEnum' => $baseDir . '/src/Extensions/GFQuiz/Type/Enum/QuizFieldGradingTypeEnum.php',
    'WPGraphQL\\GF\\Extensions\\GFQuiz\\Type\\Enum\\QuizFieldTypeEnum' => $baseDir . '/src/Extensions/GFQuiz/Type/Enum/QuizFieldTypeEnum.php',
    'WPGraphQL\\GF\\Extensions\\GFQuiz\\Type\\WPObject\\Entry\\EntryQuizResults' => $baseDir . '/src/Extensions/GFQuiz/Type/WPObject/Entry/EntryQuizResults.php',
    'WPGraphQL\\GF\\Extensions\\GFQuiz\\Type\\WPObject\\FormField\\FieldProperty\\PropertyMapper' => $baseDir . '/src/Extensions/GFQuiz/Type/WPObject/FormField/FieldProperty/PropertyMapper.php',
    'WPGraphQL\\GF\\Extensions\\GFQuiz\\Type\\WPObject\\Form\\FormQuiz' => $baseDir . '/src/Extensions/GFQuiz/Type/WPObject/Form/FormQuiz.php',
    'WPGraphQL\\GF\\Extensions\\GFQuiz\\Type\\WPObject\\Form\\FormQuizConfirmation' => $baseDir . '/src/Extensions/GFQuiz/Type/WPObject/Form/FormQuizConfirmation.php',
    'WPGraphQL\\GF\\Extensions\\GFQuiz\\Type\\WPObject\\Form\\FormQuizGrades' => $baseDir . '/src/Extensions/GFQuiz/Type/WPObject/Form/FormQuizGrades.php',
    'WPGraphQL\\GF\\Extensions\\GFQuiz\\Type\\WPObject\\QuizResults\\QuizResults' => $baseDir . '/src/Extensions/GFQuiz/Type/WPObject/QuizResults/QuizResults.php',
    'WPGraphQL\\GF\\Extensions\\GFQuiz\\Type\\WPObject\\QuizResults\\QuizResultsChoiceCount' => $baseDir . '/src/Extensions/GFQuiz/Type/WPObject/QuizResults/QuizResultsChoiceCount.php',
    'WPGraphQL\\GF\\Extensions\\GFQuiz\\Type\\WPObject\\QuizResults\\QuizResultsFieldCount' => $baseDir . '/src/Extensions/GFQuiz/Type/WPObject/QuizResults/QuizResultsFieldCount.php',
    'WPGraphQL\\GF\\Extensions\\GFQuiz\\Type\\WPObject\\QuizResults\\QuizResultsGradeCount' => $baseDir . '/src/Extensions/GFQuiz/Type/WPObject/QuizResults/QuizResultsGradeCount.php',
    'WPGraphQL\\GF\\Extensions\\GFQuiz\\Type\\WPObject\\QuizResults\\QuizResultsScoreCount' => $baseDir . '/src/Extensions/GFQuiz/Type/WPObject/QuizResults/QuizResultsScoreCount.php',
    'WPGraphQL\\GF\\Extensions\\GFSignature\\Data\\FieldValueInput\\SignatureValuesInput' => $baseDir . '/src/Extensions/GFSignature/Data/FieldValueInput/SignatureValuesInput.php',
    'WPGraphQL\\GF\\Extensions\\GFSignature\\GFSignature' => $baseDir . '/src/Extensions/GFSignature/GFSignature.php',
    'WPGraphQL\\GF\\Extensions\\GFSignature\\Type\\Enum\\SignatureFieldBorderStyleEnum' => $baseDir . '/src/Extensions/GFSignature/Type/Enum/SignatureFieldBorderStyleEnum.php',
    'WPGraphQL\\GF\\Extensions\\GFSignature\\Type\\Enum\\SignatureFieldBorderWidthEnum' => $baseDir . '/src/Extensions/GFSignature/Type/Enum/SignatureFieldBorderWidthEnum.php',
    'WPGraphQL\\GF\\Extensions\\GFSignature\\Type\\WPObject\\FormField\\FieldProperty\\PropertyMapper' => $baseDir . '/src/Extensions/GFSignature/Type/WPObject/FormField/FieldProperty/PropertyMapper.php',
    'WPGraphQL\\GF\\Extensions\\WPGatsby\\GravityFormsMonitor' => $baseDir . '/src/Extensions/WPGatsby/GravityFormsMonitor.php',
    'WPGraphQL\\GF\\Extensions\\WPGatsby\\Settings' => $baseDir . '/src/Extensions/WPGatsby/Settings.php',
    'WPGraphQL\\GF\\Extensions\\WPGatsby\\WPGatsby' => $baseDir . '/src/Extensions/WPGatsby/WPGatsby.php',
    'WPGraphQL\\GF\\Extensions\\WPJamstackDeployments\\WPJamstackDeployments' => $baseDir . '/src/Extensions/WPJamstackDeployments/WPJamstackDeployments.php',
    'WPGraphQL\\GF\\GF' => $baseDir . '/src/GF.php',
    'WPGraphQL\\GF\\Interfaces\\Enum' => $baseDir . '/src/Interfaces/Enum.php',
    'WPGraphQL\\GF\\Interfaces\\Field' => $baseDir . '/src/Interfaces/Field.php',
    'WPGraphQL\\GF\\Interfaces\\FieldProperty' => $baseDir . '/src/Interfaces/FieldProperty.php',
    'WPGraphQL\\GF\\Interfaces\\Mutation' => $baseDir . '/src/Interfaces/Mutation.php',
    'WPGraphQL\\GF\\Interfaces\\Registrable' => $baseDir . '/src/Interfaces/Registrable.php',
    'WPGraphQL\\GF\\Interfaces\\Type' => $baseDir . '/src/Interfaces/Type.php',
    'WPGraphQL\\GF\\Interfaces\\TypeWithFields' => $baseDir . '/src/Interfaces/TypeWithFields.php',
    'WPGraphQL\\GF\\Model\\DraftEntry' => $baseDir . '/src/Model/DraftEntry.php',
    'WPGraphQL\\GF\\Model\\Form' => $baseDir . '/src/Model/Form.php',
    'WPGraphQL\\GF\\Model\\SubmittedEntry' => $baseDir . '/src/Model/SubmittedEntry.php',
    'WPGraphQL\\GF\\Mutation\\AbstractMutation' => $baseDir . '/src/Mutation/AbstractMutation.php',
    'WPGraphQL\\GF\\Mutation\\DeleteDraftEntry' => $baseDir . '/src/Mutation/DeleteDraftEntry.php',
    'WPGraphQL\\GF\\Mutation\\DeleteEntry' => $baseDir . '/src/Mutation/DeleteEntry.php',
    'WPGraphQL\\GF\\Mutation\\SubmitDraftEntry' => $baseDir . '/src/Mutation/SubmitDraftEntry.php',
    'WPGraphQL\\GF\\Mutation\\SubmitForm' => $baseDir . '/src/Mutation/SubmitForm.php',
    'WPGraphQL\\GF\\Mutation\\UpdateDraftEntry' => $baseDir . '/src/Mutation/UpdateDraftEntry.php',
    'WPGraphQL\\GF\\Mutation\\UpdateEntry' => $baseDir . '/src/Mutation/UpdateEntry.php',
    'WPGraphQL\\GF\\TypeRegistry' => $baseDir . '/src/TypeRegistry.php',
    'WPGraphQL\\GF\\Type\\Enum\\AbstractEnum' => $baseDir . '/src/Type/Enum/AbstractEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\AddressFieldCountryEnum' => $baseDir . '/src/Type/Enum/AddressFieldCountryEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\AddressFieldTypeEnum' => $baseDir . '/src/Type/Enum/AddressFieldTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\AmPmEnum' => $baseDir . '/src/Type/Enum/AmPmEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\CaptchaFieldBadgePositionEnum' => $baseDir . '/src/Type/Enum/CaptchaFieldBadgePositionEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\CaptchaFieldThemeEnum' => $baseDir . '/src/Type/Enum/CaptchaFieldThemeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\CaptchaFieldTypeEnum' => $baseDir . '/src/Type/Enum/CaptchaFieldTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\ConditionalLogicActionTypeEnum' => $baseDir . '/src/Type/Enum/ConditionalLogicActionTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\ConditionalLogicLogicTypeEnum' => $baseDir . '/src/Type/Enum/ConditionalLogicLogicTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\CurrencyEnum' => $baseDir . '/src/Type/Enum/CurrencyEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\DateFieldFormatEnum' => $baseDir . '/src/Type/Enum/DateFieldFormatEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\DateFieldTypeEnum' => $baseDir . '/src/Type/Enum/DateFieldTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\DraftEntryIdTypeEnum' => $baseDir . '/src/Type/Enum/DraftEntryIdTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\EntryIdTypeEnum' => $baseDir . '/src/Type/Enum/EntryIdTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\EntryStatusEnum' => $baseDir . '/src/Type/Enum/EntryStatusEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\EntryTypeEnum' => $baseDir . '/src/Type/Enum/EntryTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FieldFiltersModeEnum' => $baseDir . '/src/Type/Enum/FieldFiltersModeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FieldFiltersOperatorInputEnum' => $baseDir . '/src/Type/Enum/FieldFiltersOperatorInputEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormButtonTypeEnum' => $baseDir . '/src/Type/Enum/FormButtonTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormConfirmationTypeEnum' => $baseDir . '/src/Type/Enum/FormConfirmationTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormCreditCardTypeEnum' => $baseDir . '/src/Type/Enum/FormCreditCardTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormDescriptionPlacementEnum' => $baseDir . '/src/Type/Enum/FormDescriptionPlacementEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormFieldCalendarIconTypeEnum' => $baseDir . '/src/Type/Enum/FormFieldCalendarIconTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormFieldDescriptionPlacementEnum' => $baseDir . '/src/Type/Enum/FormFieldDescriptionPlacementEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormFieldLabelPlacementEnum' => $baseDir . '/src/Type/Enum/FormFieldLabelPlacementEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormFieldRequiredIndicatorEnum' => $baseDir . '/src/Type/Enum/FormFieldRequiredIndicatorEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormFieldSizeEnum' => $baseDir . '/src/Type/Enum/FormFieldSizeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormFieldSubLabelPlacementEnum' => $baseDir . '/src/Type/Enum/FormFieldSubLabelPlacementEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormFieldTypeEnum' => $baseDir . '/src/Type/Enum/FormFieldTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormFieldVisibilityEnum' => $baseDir . '/src/Type/Enum/FormFieldVisibilityEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormIdTypeEnum' => $baseDir . '/src/Type/Enum/FormIdTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormLabelPlacementEnum' => $baseDir . '/src/Type/Enum/FormLabelPlacementEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormLimitEntriesPeriodEnum' => $baseDir . '/src/Type/Enum/FormLimitEntriesPeriodEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormNotificationToTypeEnum' => $baseDir . '/src/Type/Enum/FormNotificationToTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormPageProgressStyleEnum' => $baseDir . '/src/Type/Enum/FormPageProgressStyleEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormPageProgressTypeEnum' => $baseDir . '/src/Type/Enum/FormPageProgressTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormRetentionPolicyEnum' => $baseDir . '/src/Type/Enum/FormRetentionPolicyEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormRuleOperatorEnum' => $baseDir . '/src/Type/Enum/FormRuleOperatorEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormStatusEnum' => $baseDir . '/src/Type/Enum/FormStatusEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormSubLabelPlacementEnum' => $baseDir . '/src/Type/Enum/FormSubLabelPlacementEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormSubmitButtonLocationEnum' => $baseDir . '/src/Type/Enum/FormSubmitButtonLocationEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\FormSubmitButtonWidthEnum' => $baseDir . '/src/Type/Enum/FormSubmitButtonWidthEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\NumberFieldFormatEnum' => $baseDir . '/src/Type/Enum/NumberFieldFormatEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\PasswordFieldMinStrengthEnum' => $baseDir . '/src/Type/Enum/PasswordFieldMinStrengthEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\PhoneFieldFormatEnum' => $baseDir . '/src/Type/Enum/PhoneFieldFormatEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\PostFormatTypeEnum' => $baseDir . '/src/Type/Enum/PostFormatTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\RecaptchaTypeEnum' => $baseDir . '/src/Type/Enum/RecaptchaTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\SubmissionConfirmationTypeEnum' => $baseDir . '/src/Type/Enum/SubmissionConfirmationTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\SubmittedEntryIdTypeEnum' => $baseDir . '/src/Type/Enum/SubmittedEntryIdTypeEnum.php',
    'WPGraphQL\\GF\\Type\\Enum\\TimeFieldFormatEnum' => $baseDir . '/src/Type/Enum/TimeFieldFormatEnum.php',
    'WPGraphQL\\GF\\Type\\Input\\AbstractInput' => $baseDir . '/src/Type/Input/AbstractInput.php',
    'WPGraphQL\\GF\\Type\\Input\\AddressFieldInput' => $baseDir . '/src/Type/Input/AddressFieldInput.php',
    'WPGraphQL\\GF\\Type\\Input\\ConsentFieldInput' => $baseDir . '/src/Type/Input/ConsentFieldInput.php',
    'WPGraphQL\\GF\\Type\\Input\\CheckboxFieldInput' => $baseDir . '/src/Type/Input/CheckboxFieldInput.php',
    'WPGraphQL\\GF\\Type\\Input\\CreditCardFieldInput' => $baseDir . '/src/Type/Input/CreditCardFieldInput.php',
    'WPGraphQL\\GF\\Type\\Input\\EmailFieldInput' => $baseDir . '/src/Type/Input/EmailFieldInput.php',
    'WPGraphQL\\GF\\Type\\Input\\EntriesConnectionOrderbyInput' => $baseDir . '/src/Type/Input/EntriesConnectionOrderbyInput.php',
    'WPGraphQL\\GF\\Type\\Input\\EntriesDateFiltersInput' => $baseDir . '/src/Type/Input/EntriesDateFiltersInput.php',
    'WPGraphQL\\GF\\Type\\Input\\EntriesFieldFiltersInput' => $baseDir . '/src/Type/Input/EntriesFieldFiltersInput.php',
    'WPGraphQL\\GF\\Type\\Input\\FormFieldValuesInput' => $baseDir . '/src/Type/Input/FormFieldValuesInput.php',
    'WPGraphQL\\GF\\Type\\Input\\FormsConnectionOrderbyInput' => $baseDir . '/src/Type/Input/FormsConnectionOrderbyInput.php',
    'WPGraphQL\\GF\\Type\\Input\\ListFieldInput' => $baseDir . '/src/Type/Input/ListFieldInput.php',
    'WPGraphQL\\GF\\Type\\Input\\NameFieldInput' => $baseDir . '/src/Type/Input/NameFieldInput.php',
    'WPGraphQL\\GF\\Type\\Input\\PostImageFieldInput' => $baseDir . '/src/Type/Input/PostImageFieldInput.php',
    'WPGraphQL\\GF\\Type\\Input\\SubmitFormMetaInput' => $baseDir . '/src/Type/Input/SubmitFormMetaInput.php',
    'WPGraphQL\\GF\\Type\\Input\\UpdateDraftEntryMetaInput' => $baseDir . '/src/Type/Input/UpdateDraftEntryMetaInput.php',
    'WPGraphQL\\GF\\Type\\Input\\UpdateEntryMetaInput' => $baseDir . '/src/Type/Input/UpdateEntryMetaInput.php',
    'WPGraphQL\\GF\\Type\\WPInterface\\Entry' => $baseDir . '/src/Type/WPInterface/Entry.php',
    'WPGraphQL\\GF\\Type\\WPInterface\\FormField' => $baseDir . '/src/Type/WPInterface/FormField.php',
    'WPGraphQL\\GF\\Type\\WPInterface\\NodeWithForm' => $baseDir . '/src/Type/WPInterface/NodeWithForm.php',
    'WPGraphQL\\GF\\Type\\WPObject\\AbstractObject' => $baseDir . '/src/Type/WPObject/AbstractObject.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Button\\FormButton' => $baseDir . '/src/Type/WPObject/Button/FormButton.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Button\\FormLastPageButton' => $baseDir . '/src/Type/WPObject/Button/FormLastPageButton.php',
    'WPGraphQL\\GF\\Type\\WPObject\\ConditionalLogic\\ConditionalLogic' => $baseDir . '/src/Type/WPObject/ConditionalLogic/ConditionalLogic.php',
    'WPGraphQL\\GF\\Type\\WPObject\\ConditionalLogic\\ConditionalLogicRule' => $baseDir . '/src/Type/WPObject/ConditionalLogic/ConditionalLogicRule.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Entry\\DraftEntry' => $baseDir . '/src/Type/WPObject/Entry/DraftEntry.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Entry\\SubmittedEntry' => $baseDir . '/src/Type/WPObject/Entry/SubmittedEntry.php',
    'WPGraphQL\\GF\\Type\\WPObject\\FieldError' => $baseDir . '/src/Type/WPObject/FieldError.php',
    'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldProperty\\ChoiceMapper' => $baseDir . '/src/Type/WPObject/FormField/FieldProperty/ChoiceMapper.php',
    'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldProperty\\FieldProperties' => $baseDir . '/src/Type/WPObject/FormField/FieldProperty/FieldProperties.php',
    'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldProperty\\InputMapper' => $baseDir . '/src/Type/WPObject/FormField/FieldProperty/InputMapper.php',
    'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldProperty\\PropertyMapper' => $baseDir . '/src/Type/WPObject/FormField/FieldProperty/PropertyMapper.php',
    'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldValue\\FieldValues' => $baseDir . '/src/Type/WPObject/FormField/FieldValue/FieldValues.php',
    'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldValue\\ValueProperty\\AddressFieldValue' => $baseDir . '/src/Type/WPObject/FormField/FieldValue/ValueProperty/AddressFieldValue.php',
    'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldValue\\ValueProperty\\CheckboxFieldValue' => $baseDir . '/src/Type/WPObject/FormField/FieldValue/ValueProperty/CheckboxFieldValue.php',
    'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldValue\\ValueProperty\\FileUploadFieldValue' => $baseDir . '/src/Type/WPObject/FormField/FieldValue/ValueProperty/FileUploadFieldValue.php',
    'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldValue\\ValueProperty\\ImageFieldValue' => $baseDir . '/src/Type/WPObject/FormField/FieldValue/ValueProperty/ImageFieldValue.php',
    'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldValue\\ValueProperty\\ListFieldValue' => $baseDir . '/src/Type/WPObject/FormField/FieldValue/ValueProperty/ListFieldValue.php',
    'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldValue\\ValueProperty\\NameFieldValue' => $baseDir . '/src/Type/WPObject/FormField/FieldValue/ValueProperty/NameFieldValue.php',
    'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FieldValue\\ValueProperty\\TimeFieldValue' => $baseDir . '/src/Type/WPObject/FormField/FieldValue/ValueProperty/TimeFieldValue.php',
    'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FormFieldDataPolicy' => $baseDir . '/src/Type/WPObject/FormField/FormFieldDataPolicy.php',
    'WPGraphQL\\GF\\Type\\WPObject\\FormField\\FormFields' => $baseDir . '/src/Type/WPObject/FormField/FormFields.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Form\\Form' => $baseDir . '/src/Type/WPObject/Form/Form.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Form\\FormConfirmation' => $baseDir . '/src/Type/WPObject/Form/FormConfirmation.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Form\\FormDataPolicies' => $baseDir . '/src/Type/WPObject/Form/FormDataPolicies.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Form\\FormEntryDataPolicy' => $baseDir . '/src/Type/WPObject/Form/FormEntryDataPolicy.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Form\\FormEntryLimits' => $baseDir . '/src/Type/WPObject/Form/FormEntryLimits.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Form\\FormLogin' => $baseDir . '/src/Type/WPObject/Form/FormLogin.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Form\\FormNotification' => $baseDir . '/src/Type/WPObject/Form/FormNotification.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Form\\FormNotificationRouting' => $baseDir . '/src/Type/WPObject/Form/FormNotificationRouting.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Form\\FormPagination' => $baseDir . '/src/Type/WPObject/Form/FormPagination.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Form\\FormPersonalData' => $baseDir . '/src/Type/WPObject/Form/FormPersonalData.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Form\\FormPostCreation' => $baseDir . '/src/Type/WPObject/Form/FormPostCreation.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Form\\FormSaveAndContinue' => $baseDir . '/src/Type/WPObject/Form/FormSaveAndContinue.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Form\\FormSchedule' => $baseDir . '/src/Type/WPObject/Form/FormSchedule.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Form\\FormScheduleDetails' => $baseDir . '/src/Type/WPObject/Form/FormScheduleDetails.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Form\\FormSubmitButton' => $baseDir . '/src/Type/WPObject/Form/FormSubmitButton.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Settings\\Logger' => $baseDir . '/src/Type/WPObject/Settings/Logger.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Settings\\Settings' => $baseDir . '/src/Type/WPObject/Settings/Settings.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Settings\\SettingsLogging' => $baseDir . '/src/Type/WPObject/Settings/SettingsLogging.php',
    'WPGraphQL\\GF\\Type\\WPObject\\Settings\\SettingsRecaptcha' => $baseDir . '/src/Type/WPObject/Settings/SettingsRecaptcha.php',
    'WPGraphQL\\GF\\Type\\WPObject\\SubmissionConfirmation' => $baseDir . '/src/Type/WPObject/SubmissionConfirmation.php',
    'WPGraphQL\\GF\\UpdateChecker' => $baseDir . '/src/UpdateChecker.php',
    'WPGraphQL\\GF\\Utils\\GFUtils' => $baseDir . '/src/Utils/GFUtils.php',
    'WPGraphQL\\GF\\Utils\\Utils' => $baseDir . '/src/Utils/Utils.php',
);
