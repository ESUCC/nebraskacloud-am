# StudentSectionAssociationReference

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**student_unique_id** | **string** | A unique alpha-numeric code assigned to a student. | [optional] 
**school_id** | **int** | School Identity Column | [optional] 
**class_period_name** | **string** | An indication of the portion of a typical daily session in which students receive instruction in a specified subject (e.g., morning, sixth period, block period or AB schedules).  = | [optional] 
**classroom_identification_code** | **string** | A unique number or alphanumeric code assigned to a room by a school, school system, state, or other agency or entity. | [optional] 
**local_course_code** | **string** | The local code assigned by the LEA or Campus that identifies the organization of subject matter and related learning experiences provided for the instruction of students. | [optional] 
**unique_section_code** | **string** | A unique identifier for the section, that is defined for a campus by the classroom, the subjects taught, and the instructors that are assigned.  NEDM: Unique Course Code | [optional] 
**sequence_of_course** | **int** | When a section is part of a sequence of parts for a course, the number if the sequence.  If the course has only onle part, the value of this section attribute should be 1. | [optional] 
**school_year** | **int** | The identifier for the school year. | [optional] 
**term_descriptor** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**begin_date** | **\\DateTime** | Month, day, and year of the Student&#39;s entry or assignment to the Section. | [optional] 
**link** | [**\Swagger\Client\Model\Link**](Link.md) | Represents a hyperlink to the related studentSectionAssociation resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


