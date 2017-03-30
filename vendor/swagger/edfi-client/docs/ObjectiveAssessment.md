# ObjectiveAssessment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**assessment_reference** | [**\Swagger\Client\Model\AssessmentReference**](AssessmentReference.md) | A reference to the related Assessment resource. | [optional] 
**parent_objective_assessment_reference** | [**\Swagger\Client\Model\ObjectiveAssessmentReference**](ObjectiveAssessmentReference.md) | A reference to the related ObjectiveAssessment resource. | [optional] 
**identification_code** | **string** | A unique number or alphanumeric code assigned to a space, room, site, building, individual, organization, program, or institution by a school, school system, a state, or other agency or entity. | [optional] 
**max_raw_score** | **int** | The maximum raw score achievable across all assessment items that are correct and scored at the maximum. | [optional] 
**percent_of_assessment** | [**Number**](Number.md) | The percentage of the Assessment that tests this objective. | [optional] 
**nomenclature** | **string** | Reflects the common nomenclature for an element. | [optional] 
**description** | **string** | A detailed description of the entity. | [optional] 
**assessment_items** | [**\Swagger\Client\Model\ObjectiveAssessmentAssessmentItem[]**](ObjectiveAssessmentAssessmentItem.md) | An unordered collection of objectiveAssessmentAssessmentItems.  References individual test items, if appropriate. | [optional] 
**learning_objectives** | [**\Swagger\Client\Model\ObjectiveAssessmentLearningObjective[]**](ObjectiveAssessmentLearningObjective.md) | An unordered collection of objectiveAssessmentLearningObjectives.  References the Learning Objective(s) the Objective Assessment tests. | [optional] 
**learning_standards** | [**\Swagger\Client\Model\ObjectiveAssessmentLearningStandard[]**](ObjectiveAssessmentLearningStandard.md) | An unordered collection of objectiveAssessmentLearningStandards.  Learning Standard tested by this objective assessment. | [optional] 
**performance_levels** | [**\Swagger\Client\Model\ObjectiveAssessmentPerformanceLevel[]**](ObjectiveAssessmentPerformanceLevel.md) | An unordered collection of objectiveAssessmentPerformanceLevels.  Definition of the performance levels and the associated cut scores. Three styles are supported:  1. Specification of performance level by minimum and maximum score    2. Specification of performance level by cut score, using only minimum score    3. Specification of performance level without any mapping to scores. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


