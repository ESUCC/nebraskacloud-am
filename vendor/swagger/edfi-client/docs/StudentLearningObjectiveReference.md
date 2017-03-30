# StudentLearningObjectiveReference

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**student_unique_id** | **string** | A unique alpha-numeric code assigned to a student. | [optional] 
**objective** | **string** | The designated title of the learning objective. | [optional] 
**academic_subject_descriptor** | **string** | The description of the content or subject area (e.g., arts, mathematics, reading, stenography, or a foreign language) of an assessment. | [optional] 
**objective_grade_level_descriptor** | **string** | The grade level for which the learning objective is targeted, | [optional] 
**grading_period_descriptor** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**grading_period_begin_date** | **\\DateTime** | Month, day, and year of the first day of the GradingPeriod. | [optional] 
**school_id** | **int** | School Identity Column | [optional] 
**link** | [**\Swagger\Client\Model\Link**](Link.md) | Represents a hyperlink to the related studentLearningObjective resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


