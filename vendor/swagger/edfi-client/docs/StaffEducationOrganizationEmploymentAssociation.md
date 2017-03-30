# StaffEducationOrganizationEmploymentAssociation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**education_organization_reference** | [**\Swagger\Client\Model\EducationOrganizationReference**](EducationOrganizationReference.md) | A reference to the related EducationOrganization resource. | [optional] 
**staff_reference** | [**\Swagger\Client\Model\StaffReference**](StaffReference.md) | A reference to the related Staff resource. | [optional] 
**employment_status_descriptor** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**hire_date** | **\\DateTime** | The month, day, and year on which an individual was hired for a position. | [optional] 
**end_date** | **\\DateTime** | The month, day, and year on which a contract between an individual and a governing authority ends or is terminated under the provisions of the contract (or the date on which the agreement is made invalid). | [optional] 
**separation_type** | **string** | Type of employment separation; for example:  Voluntary separation  Involuntary separation  Mutual agreement  Other | [optional] 
**separation_reason_descriptor** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**department** | **string** | The department or suborganization the employee/contractor is associated with in the Education Organization. | [optional] 
**full_time_equivalency** | [**Number**](Number.md) | The ratio between the hours of work expected in a position and the hours of work normally expected in a full-time position in the same setting. | [optional] 
**offer_date** | **\\DateTime** | Date at which the staff member was made an official offer for this employment. | [optional] 
**hourly_wage** | [**Number**](Number.md) | Hourly wage associated with the employment position being reported. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


