# LeaveEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**staff_reference** | [**\Swagger\Client\Model\StaffReference**](StaffReference.md) | A reference to the related Staff resource. | [optional] 
**event_date** | **\\DateTime** | Date for this leave event. | [optional] 
**category_type** | **string** | The code describing the type of leave taken, for example:  Sick  Personal  Vacation | [optional] 
**reason** | **string** | Expanded reason for the staff leave. | [optional] 
**hours_on_leave** | [**Number**](Number.md) | The hours the staff was absent, if not the entire working day. | [optional] 
**substitute_assigned** | **bool** | Indicator of whether a substitute was assigned during the period of staff leave. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


