# RestraintEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**school_reference** | [**\Swagger\Client\Model\SchoolReference**](SchoolReference.md) | A reference to the related School resource. | [optional] 
**student_reference** | [**\Swagger\Client\Model\StudentReference**](StudentReference.md) | A reference to the related Student resource. | [optional] 
**identifier** | **string** | A unique number or alphanumeric code assigned to a restraint event by a school, school system, a state, or other agency or entity. | [optional] 
**event_date** | **\\DateTime** | Month, day, and year of the RestraintEvent. | [optional] 
**educational_environment_type** | **string** | The setting where the restrint was exercised.. | [optional] 
**programs** | [**\Swagger\Client\Model\RestraintEventProgram[]**](RestraintEventProgram.md) | An unordered collection of restraintEventPrograms.  The Special Education program associated with the restraint event. | [optional] 
**reasons** | [**\Swagger\Client\Model\RestraintEventReason[]**](RestraintEventReason.md) | An unordered collection of restraintEventReasons.  The items of categorization of the circumstances or reasons for the restraint. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


