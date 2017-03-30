# Intervention

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**education_organization_reference** | [**\Swagger\Client\Model\EducationOrganizationReference**](EducationOrganizationReference.md) | A reference to the related EducationOrganization resource. | [optional] 
**identification_code** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**class_type** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**delivery_method_type** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**begin_date** | **\\DateTime** | The start date for the intervention implementation. | [optional] 
**end_date** | **\\DateTime** | The end date for the intervention implementation. | [optional] 
**appropriate_grade_levels** | [**\Swagger\Client\Model\InterventionAppropriateGradeLevel[]**](InterventionAppropriateGradeLevel.md) | An unordered collection of interventionAppropriateGradeLevels.  Grade levels for the intervention. | [optional] 
**appropriate_sexes** | [**\Swagger\Client\Model\InterventionAppropriateSex[]**](InterventionAppropriateSex.md) | An unordered collection of interventionAppropriateSexes.  Gender(s) for which the intervention is appropriate. | [optional] 
**diagnoses** | [**\Swagger\Client\Model\InterventionDiagnosis[]**](InterventionDiagnosis.md) | An unordered collection of interventionDiagnoses.  Targeted purpose of the intervention (e.g., attendance issue, dropout risk). | [optional] 
**education_contents** | [**\Swagger\Client\Model\InterventionEducationContent[]**](InterventionEducationContent.md) | An unordered collection of interventionEducationContents.  Resources related to or used in this intervention, including any documentation around the intervention prescription itself. Since an intervention prescription is intended to be a published intervention, an intervention prescription should have at least one such resource. | [optional] 
**intervention_prescriptions** | [**\Swagger\Client\Model\InterventionInterventionPrescription[]**](InterventionInterventionPrescription.md) | An unordered collection of interventionInterventionPrescriptions.  The reference to the intervention prescription being followed in this intervention implementation. | [optional] 
**learning_resource_metadata_ur_is** | [**\Swagger\Client\Model\InterventionLearningResourceMetadataURI[]**](InterventionLearningResourceMetadataURI.md) | An unordered collection of interventionLearningResourceMetadataURIs.  Resources related to or used in this intervention, including any documentation around the intervention prescription itself. Since an intervention prescription is intended to be a published intervention, an intervention prescription should have at least one such resource. | [optional] 
**meeting_times** | [**\Swagger\Client\Model\InterventionMeetingTime[]**](InterventionMeetingTime.md) | An unordered collection of interventionMeetingTimes.  The times at which this intervention is scheduled to meet. | [optional] 
**population_serveds** | [**\Swagger\Client\Model\InterventionPopulationServed[]**](InterventionPopulationServed.md) | An unordered collection of interventionPopulationServeds.  A subset of students that are the focus of the intervention.  | [optional] 
**staffs** | [**\Swagger\Client\Model\InterventionStaff[]**](InterventionStaff.md) | An unordered collection of interventionStaffs.  Staff member associated with the intervention. | [optional] 
**uris** | [**\Swagger\Client\Model\InterventionURI[]**](InterventionURI.md) | An unordered collection of interventionURIs.  Resources related to or used in this intervention, including any documentation around the intervention prescription itself. Since an intervention prescription is intended to be a published intervention, an intervention prescription should have at least one such resource. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


