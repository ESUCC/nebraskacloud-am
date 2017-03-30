# Cohort

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**education_organization_reference** | [**\Swagger\Client\Model\EducationOrganizationReference**](EducationOrganizationReference.md) | A reference to the related EducationOrganization resource. | [optional] 
**identifier** | **string** | The name or ID for the cohort. | [optional] 
**description** | **string** | The description of he cohort and its purpose. | [optional] 
**type** | **string** | The type of the cohort (academic intervention, attendance intervention, discipline intervention, breakout session, etc.). | [optional] 
**scope_type** | **string** | The scope of cohort (e.g., campus, district, classroom). | [optional] 
**academic_subject_descriptor** | **string** | The subject for an academic intervention (e.g., science, mathematics). | [optional] 
**programs** | [**\Swagger\Client\Model\CohortProgram[]**](CohortProgram.md) | An unordered collection of cohortPrograms.  The optional program associated with this cohort (e.g., Special Education). | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


