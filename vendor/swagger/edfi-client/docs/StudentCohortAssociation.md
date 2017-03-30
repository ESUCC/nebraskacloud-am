# StudentCohortAssociation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**cohort_reference** | [**\Swagger\Client\Model\CohortReference**](CohortReference.md) | A reference to the related Cohort resource. | [optional] 
**student_reference** | [**\Swagger\Client\Model\StudentReference**](StudentReference.md) | A reference to the related Student resource. | [optional] 
**begin_date** | **\\DateTime** | The month, day, and year on which the Student was first identified as part of the Cohort. | [optional] 
**end_date** | **\\DateTime** | The month, day, and year on which the Student was removed as part of the Cohort. | [optional] 
**sections** | [**\Swagger\Client\Model\StudentCohortAssociationSection[]**](StudentCohortAssociationSection.md) | An unordered collection of studentCohortAssociationSections.  The cohort representing the subdivision of students within one or more sections. For example, a group of students may be given additional instruction and tracked as a cohort. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


