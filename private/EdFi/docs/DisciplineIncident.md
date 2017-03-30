# DisciplineIncident

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**school_reference** | [**\Swagger\Client\Model\SchoolReference**](SchoolReference.md) | A reference to the related School resource. | [optional] 
**staff_reference** | [**\Swagger\Client\Model\StaffReference**](StaffReference.md) | A reference to the related Staff resource. | [optional] 
**incident_identifier** | **string** | A locally assigned unique identifier (within the school or school district) to identify each specific incident or occurrence. The same identifier should be used to document the entire incident even if it included multiple offenses and multiple offenders. | [optional] 
**incident_date** | **\\DateTime** | The month, day, and year on which the DisciplineIncident occurred. | [optional] 
**incident_time** | **string** | An indication of the time of day the incident took place. | [optional] 
**incident_location_type** | **string** | Identifies where the incident occurred and whether or not it occurred on campus, for example:  On campus  Administrative offices area  Cafeteria area  Classroom  Hallway or stairs  ... | [optional] 
**incident_description** | **string** | The description for an incident. | [optional] 
**reporter_description_descriptor** | **string** | Information on the type of individual who reported the incident. When known and/or if useful, use a more specific option code (e.g., \&quot;Counselor\&quot; rather than \&quot;Professional Staff\&quot;); for example:Student  Parent/guardian  Law enforcement officer  Nonschool personnel  Representative of visiting school  ... | [optional] 
**reporter_name** | **string** | Identifies the reporter of the incident by name. | [optional] 
**reported_to_law_enforcement** | **bool** | Indicator of whether the incident was reported to law enforcement. | [optional] 
**case_number** | **string** | The case number assigned to the incident by law enforcement or other organization. | [optional] 
**incident_cost** | [**Number**](Number.md) | The value of any quantifiable monetary loss directly resulting from the DisciplineIncident. Examples include the value of repairs necessitated by vandalism of a school facility, or the value of personnel resources used for repairs or consumed by the incident. | [optional] 
**behaviors** | [**\Swagger\Client\Model\DisciplineIncidentBehavior[]**](DisciplineIncidentBehavior.md) | An unordered collection of disciplineIncidentBehaviors.  The categories of behavior describing a discipline incident. | [optional] 
**weapons** | [**\Swagger\Client\Model\DisciplineIncidentWeapon[]**](DisciplineIncidentWeapon.md) | An unordered collection of disciplineIncidentWeapons.  Identifies the type of weapon used during an incident. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


