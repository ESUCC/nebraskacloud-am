# AdministrativeFundingControlDescriptor

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 
**administrative_funding_control_descriptor_id** | **int** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**administrative_funding_control_type** | **string** | Key for AdministrationFundingControl | [optional] 
**code_value** | **string** | A code or abbreviation that is used to refer to the descriptor. | 
**description** | **string** | The description of the descriptor. | [optional] 
**effective_begin_date** | [**\DateTime**](\DateTime.md) | The beginning date of the period when the descriptor is in effect. If omitted, the default is immediate effectiveness. | [optional] 
**effective_end_date** | [**\DateTime**](\DateTime.md) | The end date of the period when the descriptor is in effect. | [optional] 
**id** | **string** | The unique identifier of the resource. | 
**namespace** | **string** | A globally unique namespace that identifies this descriptor set. Author is strongly encouraged to use the Universal Resource Identifier (http, ftp, file, etc.) for the source of the descriptor definition. Best practice is for this source to be the descriptor file itself, so that it can be machine-readable and be fetched in real-time, if necessary. | 
**prior_descriptor_id** | **int** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**short_description** | **string** | A shortened description for the descriptor. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


