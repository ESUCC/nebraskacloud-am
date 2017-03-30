# AssessmentItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**assessment_reference** | [**\Swagger\Client\Model\AssessmentReference**](AssessmentReference.md) | A reference to the related Assessment resource. | [optional] 
**identification_code** | **string** | A unique number or alphanumeric code assigned to a space, room, site, building, individual, organization, program, or institution by a school, school system, a state, or other agency or entity. | [optional] 
**category_type** | **string** | Category or type of the assessment item.  For example:  Multiple choice  Analytic  Prose  .... | [optional] 
**max_raw_score** | **int** | The maximum raw score achievable across all assessment items that are correct and scored at the maximum. | [optional] 
**correct_response** | **string** | The correct response for the assessment item. | [optional] 
**expected_time_assessed** | **string** | The duration of time allotted for the AssessmentItem. | [optional] 
**nomenclature** | **string** | Reflects the common nomenclature for an element. | [optional] 
**learning_standards** | [**\Swagger\Client\Model\AssessmentItemLearningStandard[]**](AssessmentItemLearningStandard.md) | An unordered collection of assessmentItemLearningStandards.  Learning Standard tested by this item. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


