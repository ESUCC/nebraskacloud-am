# LearningObjective

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**parent_learning_objective_reference** | [**\Swagger\Client\Model\LearningObjectiveReference**](LearningObjectiveReference.md) | A reference to the related LearningObjective resource. | [optional] 
**objective** | **string** | The designated title of the learning objective. | [optional] 
**academic_subject_descriptor** | **string** | The description of the content or subject area (e.g., arts, mathematics, reading, stenography, or a foreign language) of an assessment. | [optional] 
**objective_grade_level_descriptor** | **string** | The grade level for which the learning objective is targeted, | [optional] 
**learning_objective_id** | **string** | The identifier for the specific learning objective in the context of a standard (e.g., 111.15.3.1.A). | [optional] 
**description** | **string** | A detailed description of the entity. | [optional] 
**nomenclature** | **string** | Reflects the common nomenclature for an element. | [optional] 
**success_criteria** | **string** | One or more statements that describes the criteria used by teachers and students to check for attainment of a learning objective. This criteria gives clear indications as to the degree to which learning is moving through the Zone or Proximal Development toward independent achievement of the LearningObjective. | [optional] 
**namespace** | **string** | Namespace for the LearningObjective.   | [optional] 
**content_standard** | [**\Swagger\Client\Model\LearningObjectiveContentStandard**](LearningObjectiveContentStandard.md) | This entity represents identified learning objectives for courses in specific grades. | [optional] 
**learning_standards** | [**\Swagger\Client\Model\LearningObjectiveLearningStandard[]**](LearningObjectiveLearningStandard.md) | An unordered collection of learningObjectiveLearningStandards.   | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


