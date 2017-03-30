# StudentSectionAttendanceEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**section_reference** | [**\Swagger\Client\Model\SectionReference**](SectionReference.md) | A reference to the related Section resource. | [optional] 
**student_reference** | [**\Swagger\Client\Model\StudentReference**](StudentReference.md) | A reference to the related Student resource. | [optional] 
**event_date** | **\\DateTime** | Date for this attendance event. | [optional] 
**attendance_event_category_descriptor** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**attendance_event_reason** | **string** | The reason for the absence or tardy. | [optional] 
**educational_environment_type** | **string** | The setting in which a child receives education and related services.  This is only used in the AttendanceEvent if different from that in the related Section. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


