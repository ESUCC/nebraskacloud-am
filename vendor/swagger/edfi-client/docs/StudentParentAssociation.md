# StudentParentAssociation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**parent_reference** | [**\Swagger\Client\Model\ParentReference**](ParentReference.md) | A reference to the related Parent resource. | [optional] 
**student_reference** | [**\Swagger\Client\Model\StudentReference**](StudentReference.md) | A reference to the related Student resource. | [optional] 
**relation_type** | **string** | The nature of an individual&#39;&#39;s relationship to a student; for example:  Father  Mother  Step Father  Step Mother  Foster Father  Foster Mother  Guardian  ...  NEDM: Relationship to Student | [optional] 
**primary_contact_status** | **bool** | Indicator of whether the person is a primary parental contact for the Student. | [optional] 
**lives_with** | **bool** | Indicator of whether the Student lives with the associated parent. | [optional] 
**emergency_contact_status** | **bool** | Indicator of whether the person is a designated emergency contact for the Student. | [optional] 
**contact_priority** | **int** | The numeric order of the preferred sequence or priority of contact. | [optional] 
**contact_restrictions** | **string** | Restrictions for student and/or teacher contact with the individual (e.g., the student may not be picked up by the individual). | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


