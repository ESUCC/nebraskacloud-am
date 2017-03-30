# InterventionPrescription

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**education_organization_reference** | [**\Swagger\Client\Model\EducationOrganizationReference**](EducationOrganizationReference.md) | A reference to the related EducationOrganization resource. | [optional] 
**identification_code** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**intervention_class_type** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**delivery_method_type** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**appropriate_grade_levels** | [**\Swagger\Client\Model\InterventionPrescriptionAppropriateGradeLevel[]**](InterventionPrescriptionAppropriateGradeLevel.md) | An unordered collection of interventionPrescriptionAppropriateGradeLevels.  Grade levels for the prescribed intervention-if omitted, considered generally applicable. | [optional] 
**appropriate_sexes** | [**\Swagger\Client\Model\InterventionPrescriptionAppropriateSex[]**](InterventionPrescriptionAppropriateSex.md) | An unordered collection of interventionPrescriptionAppropriateSexes.  Gender(s) for which the intervention prescription is appropriate. | [optional] 
**diagnoses** | [**\Swagger\Client\Model\InterventionPrescriptionDiagnosis[]**](InterventionPrescriptionDiagnosis.md) | An unordered collection of interventionPrescriptionDiagnoses.  Targeted purpose of the intervention (e.g., attendance issue, dropout risk). | [optional] 
**education_contents** | [**\Swagger\Client\Model\InterventionPrescriptionEducationContent[]**](InterventionPrescriptionEducationContent.md) | An unordered collection of interventionPrescriptionEducationContents.  Resources related to or used in this intervention prescription, including any documentation around the intervention prescription itself. Since an intervention prescription is intended to be a published intervention, an intervention prescription should have at least one such resource. | [optional] 
**learning_resource_metadata_ur_is** | [**\Swagger\Client\Model\InterventionPrescriptionLearningResourceMetadataURI[]**](InterventionPrescriptionLearningResourceMetadataURI.md) | An unordered collection of interventionPrescriptionLearningResourceMetadataURIs.  Resources related to or used in this intervention prescription, including any documentation around the intervention prescription itself. Since an intervention prescription is intended to be a published intervention, an intervention prescription should have at least one such resource. | [optional] 
**population_serveds** | [**\Swagger\Client\Model\InterventionPrescriptionPopulationServed[]**](InterventionPrescriptionPopulationServed.md) | An unordered collection of interventionPrescriptionPopulationServeds.  A subset of students that are the focus of the intervention. | [optional] 
**uris** | [**\Swagger\Client\Model\InterventionPrescriptionURI[]**](InterventionPrescriptionURI.md) | An unordered collection of interventionPrescriptionURIs.  Resources related to or used in this intervention prescription, including any documentation around the intervention prescription itself. Since an intervention prescription is intended to be a published intervention, an intervention prescription should have at least one such resource. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


