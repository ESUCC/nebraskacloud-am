# StaffSchoolAssociation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**school_reference** | [**\Swagger\Client\Model\SchoolReference**](SchoolReference.md) | A reference to the related School resource. | [optional] 
**staff_reference** | [**\Swagger\Client\Model\StaffReference**](StaffReference.md) | A reference to the related Staff resource. | [optional] 
**program_assignment_descriptor** | **string** | The name of the program for which the individual is assigned; for example:  Regular education  Title I-Academic  Title I-Non-Academic  Special Education  Bilingual/English as a Second Language  NEDM: Program Assignment | [optional] 
**school_year** | **int** | The identifier for the school year. | [optional] 
**academic_subjects** | [**\Swagger\Client\Model\StaffSchoolAssociationAcademicSubject[]**](StaffSchoolAssociationAcademicSubject.md) | An unordered collection of staffSchoolAssociationAcademicSubjects.  The teaching field taught by an individual: for example: English/Language Arts, Reading, Mathematics, Science, Social Sciences, etc. | [optional] 
**grade_levels** | [**\Swagger\Client\Model\StaffSchoolAssociationGradeLevel[]**](StaffSchoolAssociationGradeLevel.md) | An unordered collection of staffSchoolAssociationGradeLevels.  The set of grade levels for which the individual&#39;s assignment is responsible. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


