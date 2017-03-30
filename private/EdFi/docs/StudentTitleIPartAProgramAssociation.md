# StudentTitleIPartAProgramAssociation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**education_organization_reference** | [**\Swagger\Client\Model\EducationOrganizationReference**](EducationOrganizationReference.md) | A reference to the related EducationOrganization resource. | [optional] 
**program_reference** | [**\Swagger\Client\Model\ProgramReference**](ProgramReference.md) | A reference to the related Program resource. | [optional] 
**student_reference** | [**\Swagger\Client\Model\StudentReference**](StudentReference.md) | A reference to the related Student resource. | [optional] 
**begin_date** | **\\DateTime** | The month, day, and year on which the Student first received services. | [optional] 
**end_date** | **\\DateTime** | The month, day, and year on which the Student exited the Program or stopped receiving services. | [optional] 
**reason_exited_descriptor** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**served_outside_of_regular_session** | **bool** | Indicates whether the Student received services during the summer session or between sessions. | [optional] 
**title_i_part_a_participant_type** | **string** | An indication of the type of Title I program, if any, in which the student is participating and served:  Public Targeted Assistance Program  Public Schoolwide Program  Private school student participating  Local Neglected Program  NEDM: Title I Participlant | [optional] 
**services** | [**\Swagger\Client\Model\StudentProgramAssociationService[]**](StudentProgramAssociationService.md) | An unordered collection of studentProgramAssociationServices.  Indicates the services being provided to the student by the program. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


