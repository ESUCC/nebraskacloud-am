# PostGraduateActivity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 
**descriptor** | **string** | Appropriate code to describe the student&#39;s activity after completion. | 
**determination_descriptor** | **string** | Appropriate code that indicates the method of determining the Post Graduate Activity value for this student. | 
**id** | **string** | The unique identifier of the resource. | 
**local_education_agency_reference** | [**\Swagger\Client\Model\LocalEducationAgencyReference**](LocalEducationAgencyReference.md) | A reference to the related LocalEducationAgency resource. | 
**school_year_type_reference** | [**\Swagger\Client\Model\SchoolYearTypeReference**](SchoolYearTypeReference.md) | A reference to the related SchoolYearType resource. | 
**student_unique_id** | **string** | The NDE student identifier (10-digit) for the CTE Post graduate student. This cannot be a student reference since the Post Graduate Activity is reported one year after student&#39;s graduation and student will not be in current year student list. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


