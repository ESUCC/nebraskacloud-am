# CourseOffering

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**course_reference** | [**\Swagger\Client\Model\CourseReference**](CourseReference.md) | A reference to the related Course resource. | [optional] 
**school_reference** | [**\Swagger\Client\Model\SchoolReference**](SchoolReference.md) | A reference to the related School resource. | [optional] 
**session_reference** | [**\Swagger\Client\Model\SessionReference**](SessionReference.md) | A reference to the related Session resource. | [optional] 
**local_course_code** | **string** | The local code assigned by the LEA that identifies the organization of subject matter and related learning experiences provided for the instruction of students. | [optional] 
**local_course_title** | **string** | The descriptive name given to a course of study offered in the school, if different from the CourseTitle. | [optional] 
**instructional_time_planned** | **int** | The planned total number of clock minutes of instruction for this course offering. Generally, this should be at least as many minutes as is required for completion by the related state- or district-defined course. | [optional] 
**curriculum_useds** | [**\Swagger\Client\Model\CourseOfferingCurriculumUsed[]**](CourseOfferingCurriculumUsed.md) | An unordered collection of courseOfferingCurriculumUseds.  The type of curriculum used in an early learning classroom or group. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


