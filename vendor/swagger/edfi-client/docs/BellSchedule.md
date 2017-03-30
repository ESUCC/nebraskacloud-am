# BellSchedule

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**calendar_date_reference** | [**\Swagger\Client\Model\CalendarDateReference**](CalendarDateReference.md) | A reference to the related CalendarDate resource. | [optional] 
**name** | **string** | Name or title of the bell schedule. | [optional] 
**grade_level_descriptor** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**meeting_times** | [**\Swagger\Client\Model\BellScheduleMeetingTime[]**](BellScheduleMeetingTime.md) | An unordered collection of bellScheduleMeetingTimes.   | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


