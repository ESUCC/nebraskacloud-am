# InterventionStudy

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**education_organization_reference** | [**\Swagger\Client\Model\EducationOrganizationReference**](EducationOrganizationReference.md) | A reference to the related EducationOrganization resource. | [optional] 
**intervention_prescription_reference** | [**\Swagger\Client\Model\InterventionPrescriptionReference**](InterventionPrescriptionReference.md) | A reference to the related InterventionPrescription resource. | [optional] 
**identification_code** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**participants** | **int** | The number of participants observed in the study. | [optional] 
**delivery_method_type** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**intervention_class_type** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**appropriate_grade_levels** | [**\Swagger\Client\Model\InterventionStudyAppropriateGradeLevel[]**](InterventionStudyAppropriateGradeLevel.md) | An unordered collection of interventionStudyAppropriateGradeLevels.  Grade levels participating in this study. | [optional] 
**appropriate_sexes** | [**\Swagger\Client\Model\InterventionStudyAppropriateSex[]**](InterventionStudyAppropriateSex.md) | An unordered collection of interventionStudyAppropriateSexes.  Genders participating in this study-if omitted, considered to be all. | [optional] 
**education_contents** | [**\Swagger\Client\Model\InterventionStudyEducationContent[]**](InterventionStudyEducationContent.md) | An unordered collection of interventionStudyEducationContents.  Reference to any published papers, reports or other documents about this intervention study. | [optional] 
**intervention_effectivenesses** | [**\Swagger\Client\Model\InterventionStudyInterventionEffectiveness[]**](InterventionStudyInterventionEffectiveness.md) | An unordered collection of interventionStudyInterventionEffectivenesses.  Measurement of the effectiveness of the intervention per diagnosis. | [optional] 
**learning_resource_metadata_ur_is** | [**\Swagger\Client\Model\InterventionStudyLearningResourceMetadataURI[]**](InterventionStudyLearningResourceMetadataURI.md) | An unordered collection of interventionStudyLearningResourceMetadataURIs.  Reference to any published papers, reports or other documents about this intervention study. | [optional] 
**population_serveds** | [**\Swagger\Client\Model\InterventionStudyPopulationServed[]**](InterventionStudyPopulationServed.md) | An unordered collection of interventionStudyPopulationServeds.  A subset of students that are the focus of the intervention. | [optional] 
**state_abbreviations** | [**\Swagger\Client\Model\InterventionStudyStateAbbreviation[]**](InterventionStudyStateAbbreviation.md) | An unordered collection of interventionStudyStateAbbreviations.  The abbreviation for the state (within the United States) or outlying area in which the school system that the participants of the study are considered to be a part of is located. | [optional] 
**uris** | [**\Swagger\Client\Model\InterventionStudyURI[]**](InterventionStudyURI.md) | An unordered collection of interventionStudyURIs.  Reference to any published papers, reports or other documents about this intervention study. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


