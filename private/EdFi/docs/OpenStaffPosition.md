# OpenStaffPosition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**education_organization_reference** | [**\Swagger\Client\Model\EducationOrganizationReference**](EducationOrganizationReference.md) | A reference to the related EducationOrganization resource. | [optional] 
**employment_status_descriptor** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**staff_classification_descriptor** | **string** | The position&#39;&#39;s title or rank (e.g., Counselor, teacher, etc) | [optional] 
**requisition_number** | **string** | The number or identifier assigned to an open staff position, typically a requisition number assigned by Human Resources. | [optional] 
**date_posted** | **\\DateTime** | Date the OpenStaffPosition was posted. | [optional] 
**position_title** | **string** | The descriptive name of an individual&#39;s position. | [optional] 
**program_assignment_descriptor** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**date_posting_removed** | **\\DateTime** | The date the posting was removed or filled. | [optional] 
**posting_result_type** | **string** | Indication of whether the position was filled or retired without filling. | [optional] 
**academic_subjects** | [**\Swagger\Client\Model\OpenStaffPositionAcademicSubject[]**](OpenStaffPositionAcademicSubject.md) | An unordered collection of openStaffPositionAcademicSubjects.  The teaching field required for the position: for example: English/Language Arts, Reading, Mathematics, Science, Social Sciences, etc. | [optional] 
**instructional_grade_levels** | [**\Swagger\Client\Model\OpenStaffPositionInstructionalGradeLevel[]**](OpenStaffPositionInstructionalGradeLevel.md) | An unordered collection of openStaffPositionInstructionalGradeLevels.  The set of grade levels for which the position&#39;s assignment is responsible. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


