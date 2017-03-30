# StudentMigrantEducationProgramAssociation

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
**priority_for_services** | **bool** | Report migratory children who are classified as having \&quot;priority for services\&quot; because they are failing, or most at risk of failing to meet the State&#39;s challenging State academic content standards and challenging State student academic achievement standards, and their education has been interrupted during the regular school year. | [optional] 
**last_qualifying_move** | **\\DateTime** | Date the last qualifying move occurred; used to compute MEP status. | [optional] 
**continuation_of_services_reason_descriptor** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**us_initial_entry** | **\\DateTime** | The month, day, and year on which the Student first entered the U.S. | [optional] 
**us_most_recent_entry** | **\\DateTime** | The month, day, and year of the Student&#39;s most recent entry into the U.S. | [optional] 
**us_initial_school_entry** | **\\DateTime** | The month, day, and year on which the Student first entered a U.S. school. | [optional] 
**services** | [**\Swagger\Client\Model\StudentProgramAssociationService[]**](StudentProgramAssociationService.md) | An unordered collection of studentProgramAssociationServices.  Indicates the services being provided to the student by the program. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


