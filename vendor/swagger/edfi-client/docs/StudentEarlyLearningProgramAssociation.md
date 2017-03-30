# StudentEarlyLearningProgramAssociation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 
**begin_date** | [**\DateTime**](\DateTime.md) | The month, day, and year on which the student first received services.  NEDM: Beginning Date | 
**early_learning_setting_descriptor** | **string** | The setting of the student&#39;s participation in the program. | 
**education_organization_id** | **int** | The education organization where the student is participating in or receiving the program services. | 
**end_date** | [**\DateTime**](\DateTime.md) | The month, day, and year on which the student exited the program or stopped receiving services.  NEDM: Ending Date | [optional] 
**id** | **string** | The unique identifier of the resource. | 
**program_education_organization_id** | **int** | The education organization where the student is participating in or receiving the program services. | 
**program_name** | **string** | The formal name of the program of instruction, training, services or benefits available through federal, state, or local agencies. | 
**program_type** | **string** | The program associated with the student. | 
**reason_exited_descriptor** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**served_outside_of_regular_session** | **bool** | Indicates whether the student received services during the summer session or between sessions. | [optional] 
**services** | [**\Swagger\Client\Model\StudentProgramAssociationService[]**](StudentProgramAssociationService.md) | An unordered collection of studentProgramAssociationServices.  This association is an NDE extension of the StudentProgramAssociation core table for Early Learning Programs. | [optional] 
**student_unique_id** | **string** | A unique alpha-numeric code assigned to a student. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


