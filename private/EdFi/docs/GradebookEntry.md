# GradebookEntry

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**grading_period_reference** | [**\Swagger\Client\Model\GradingPeriodReference**](GradingPeriodReference.md) | A reference to the related GradingPeriod resource. | [optional] 
**section_reference** | [**\Swagger\Client\Model\SectionReference**](SectionReference.md) | A reference to the related Section resource. | [optional] 
**title** | **string** | The name or title of the activity to be recorded in the gradebook entry. | [optional] 
**date_assigned** | **\\DateTime** | The date the assignment, homework, or assessment was assigned or executed. | [optional] 
**type** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**description** | **string** | A detailed description of the entity. | [optional] 
**learning_objectives** | [**\Swagger\Client\Model\GradebookEntryLearningObjective[]**](GradebookEntryLearningObjective.md) | An unordered collection of gradebookEntryLearningObjectives.  Learning Objectives associated with the Gradebook Entry. | [optional] 
**learning_standards** | [**\Swagger\Client\Model\GradebookEntryLearningStandard[]**](GradebookEntryLearningStandard.md) | An unordered collection of gradebookEntryLearningStandards.   | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


