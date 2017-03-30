# SectionReference

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**school_id** | **int** | School Identity Column | [optional] 
**class_period_name** | **string** | An indication of the portion of a typical daily session in which students receive instruction in a specified subject (e.g., morning, sixth period, block period, or AB schedules).   NEDM: Class Period | [optional] 
**classroom_identification_code** | **string** | A unique number or alphanumeric code assigned to a room by a school, school system, state, or other agency or entity. | [optional] 
**local_course_code** | **string** | The local code assigned by the LEA or Campus that identifies the organization of subject matter and related learning experiences provided for the instruction of students. | [optional] 
**term_descriptor** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**school_year** | **int** | The identifier for the school year. | [optional] 
**unique_section_code** | **string** | A unique identifier for the Section, that is defined by the classroom, the subjects taught, and the instructors that are assigned. | [optional] 
**sequence_of_course** | **int** | When a Section is part of a sequence of parts for a course, the number if the sequence. If the course has only one part, the value of this Section attribute should be 1. | [optional] 
**link** | [**\Swagger\Client\Model\Link**](Link.md) | Represents a hyperlink to the related section resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


