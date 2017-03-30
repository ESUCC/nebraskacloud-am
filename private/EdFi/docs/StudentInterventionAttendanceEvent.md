# StudentInterventionAttendanceEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**intervention_reference** | [**\Swagger\Client\Model\InterventionReference**](InterventionReference.md) | A reference to the related Intervention resource. | [optional] 
**student_reference** | [**\Swagger\Client\Model\StudentReference**](StudentReference.md) | A reference to the related Student resource. | [optional] 
**event_date** | **\\DateTime** | Date for this attendance event. | [optional] 
**attendance_event_category_descriptor** | **string** | Key for AttendanceEventCategoryType | [optional] 
**attendance_event_reason** | **string** | The reason for the absence or tardy. | [optional] 
**educational_environment_type** | **string** | Key for EducationalEnvironment | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


