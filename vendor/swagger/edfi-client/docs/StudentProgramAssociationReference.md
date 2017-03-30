# StudentProgramAssociationReference

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**student_unique_id** | **string** | A unique alpha-numeric code assigned to a student. | [optional] 
**education_organization_id** | **int** | EducationOrganization Identity Column | [optional] 
**program_type** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**program_name** | **string** | The formal name of the program of instruction, training, services or benefits available through federal, state, or local agencies. | [optional] 
**program_education_organization_id** | **int** | The education organization where the student is participating in or receiving the program services. | [optional] 
**begin_date** | **\\DateTime** | The month, day, and year on which the Student first received services. | [optional] 
**link** | [**\Swagger\Client\Model\Link**](Link.md) | Represents a hyperlink to the related studentProgramAssociation resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


