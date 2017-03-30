# GradingPeriod

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**school_reference** | [**\Swagger\Client\Model\SchoolReference**](SchoolReference.md) | A reference to the related School resource. | [optional] 
**descriptor** | **string** | The name of the grading period during the school year in which the grade is offered (e.g., 1st cycle, 1st semester) | [optional] 
**begin_date** | **\\DateTime** | Month, day, and year of the first day of the GradingPeriod. | [optional] 
**total_instructional_days** | **int** | Total days available for educational instruction during the grading period. | [optional] 
**end_date** | **\\DateTime** | Month, day, and year of the last day of the GradingPeriod. | [optional] 
**period_sequence** | **int** | The sequential order of this period relative to other periods. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


