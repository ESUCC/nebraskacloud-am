# CourseTranscript

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**course_reference** | [**\Swagger\Client\Model\CourseReference**](CourseReference.md) | A reference to the related Course resource. | [optional] 
**school_reference** | [**\Swagger\Client\Model\SchoolReference**](SchoolReference.md) | A reference to the related School resource. | [optional] 
**student_academic_record_reference** | [**\Swagger\Client\Model\StudentAcademicRecordReference**](StudentAcademicRecordReference.md) | A reference to the related StudentAcademicRecord resource. | [optional] 
**course_attempt_result_type** | **string** | The result from the student&#39;&#39;s attempt to take the course, for example:  Pass  Fail  Incomplete  Withdrawn  Expelled | [optional] 
**attempted_credit_type** | **string** | Key for Credit | [optional] 
**attempted_credit_conversion** | [**Number**](Number.md) | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional] 
**attempted_credits** | [**Number**](Number.md) | The number of credits attempted for a course. | [optional] 
**earned_credit_type** | **string** | Key for Credit | [optional] 
**earned_credit_conversion** | [**Number**](Number.md) | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional] 
**earned_credits** | [**Number**](Number.md) | The number of credits awarded or earned for the course. | [optional] 
**when_taken_grade_level_descriptor** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.   | [optional] 
**method_credit_earned_type** | **string** | The method the credits were earned, for example:  Classroom, Examination, Transfer | [optional] 
**final_letter_grade_earned** | **string** | The final indicator of student performance in a class as submitted by the instructor. | [optional] 
**final_numeric_grade_earned** | [**Number**](Number.md) | The final indicator of student performance in a class as submitted by the instructor. | [optional] 
**course_repeat_code_type** | **string** | Indicates that an academic course has been repeated by a student and how that repeat is to be computed in the student&#39;&#39;s academic grade average. | [optional] 
**course_title** | **string** | The descriptive name given to a course of study offered in a school or other institution or organization. In departmentalized classes at the elementary, secondary, and postsecondary levels (and for staff development activities), this refers to the name by which a course is identified (e.g., American History, English III). For elementary and other non-departmentalized classes, it refers to any portion of the instruction for which a grade or report is assigned (e.g., reading, composition, spelling, and language arts). | [optional] 
**alternative_course_title** | **string** | The descriptive name given to a course of study offered in the school, if different from the CourseTitle. | [optional] 
**alternative_course_code** | **string** | The local code assigned by the school that identifies the course offering, the code from an external educational organization, or other alternate course code. | [optional] 
**earned_additional_credits** | [**\Swagger\Client\Model\CourseTranscriptEarnedAdditionalCredits[]**](CourseTranscriptEarnedAdditionalCredits.md) | An unordered collection of courseTranscriptEarnedAdditionalCredits.  Additional credits or units of value awarded for the completion of a course (e.g., AP, IB, Dual Credits). | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


