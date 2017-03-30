# StaffEducationOrganizationPositionAssignmentAssociation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 
**begin_date** | [**\DateTime**](\DateTime.md) | Month, day and year of the start or effective date of a staff member&#39;&#39;s employment, contract or relationship with the LEA.   | 
**controlling_district_code** | **string** | Staff assigned to serve Districts/Systems/ESUs other than the District/System/ESU that holds the contract. This field will also be used for Educational Service Units to report Staff assigned to Districts/Systems/ESUs. | 
**education_organization_reference** | [**\Swagger\Client\Model\EducationOrganizationReference**](EducationOrganizationReference.md) | A reference to the related EducationOrganization resource. | 
**end_date** | [**\DateTime**](\DateTime.md) | Month, day and year of the end or termination date of a staff member&#39;&#39;s employment, contract or relationship with the LEA.   | [optional] 
**full_time_equivalency** | **int** | The value between 1 and 100 that indicates the percentage of the staff member s time that is allocated to the assignment (no decimal). This is an indication of the time a staff member spends in their assignment as it relates to the total time in the workweek defined for that assignment. Full-time FTE is reported as 100. | 
**id** | **string** | The unique identifier of the resource. | 
**staff_position_assignment_descriptor** | **string** | The titles of employment, official status, or rank of education staff.   | 
**staff_reference** | [**\Swagger\Client\Model\StaffReference**](StaffReference.md) | A reference to the related Staff resource. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


