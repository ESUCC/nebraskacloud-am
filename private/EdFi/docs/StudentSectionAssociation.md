# StudentSectionAssociation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**section_reference** | [**\Swagger\Client\Model\SectionReference**](SectionReference.md) | A reference to the related Section resource. | [optional] 
**student_reference** | [**\Swagger\Client\Model\StudentReference**](StudentReference.md) | A reference to the related Student resource. | [optional] 
**begin_date** | **\\DateTime** | Month, day, and year of the Student&#39;s entry or assignment to the Section. | [optional] 
**end_date** | **\\DateTime** | Month, day, and year of the withdrawal or exit of the Student from the Section. | [optional] 
**homeroom_indicator** | **bool** | Indicates the Section is the student&#39;s homeroom. Homeroom period may the convention for taking daily attendance. | [optional] 
**repeat_identifier_type** | **string** | An indication as to whether a student has previously taken a given course.  NEDM: Repeat Identifier  Repeated, counted in grade point average  Repeated, not counted in grade point average  Not repeated  Other | [optional] 
**teacher_student_data_link_exclusion** | **bool** | Indicates that the student-section combination is excluded from calculation of value-added or growth attribution calculations used for a particular teacher evaluation. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


