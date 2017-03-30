# StudentSpecialEducationProgramAssociation

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
**idea_eligibility** | **bool** | Indicator of the eligibility of the student to receive special education services according to the Individuals with Disabilities Education Act (IDEA). | [optional] 
**special_education_setting_descriptor** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**special_education_hours_per_week** | [**Number**](Number.md) | The number of hours per week for special education instruction and therapy. | [optional] 
**school_hours_per_week** | [**Number**](Number.md) | Indicate the total number of hours of instructional time per week for the school that the student attends. | [optional] 
**multiply_disabled** | **bool** | Indicates whether the Student receiving special education and related services has been designated as multiply disabled by the admission, review, and dismissal committee as aligned with federal requirements. | [optional] 
**medically_fragile** | **bool** | Indicates whether the Student receiving special education and related services is: 1) in the age range of birth to 22 years, and 2) has a serious, ongoing illness or a chronic condition that has lasted or is anticipated to last at least 12 or more months or has required at least one month of hospitalization, and that requires daily, ongoing medical treatments and monitoring by appropriately trained personnel which may include parents or other family members, and 3) requires the routine use of medical device or of assistive technology to compensate for the loss of usefulness of a body function needed to participate in activities of daily living, and 4) lives with ongoing threat to his or her continued well-being. Aligns with federal requirements. | [optional] 
**last_evaluation_date** | **\\DateTime** | The date of the last special education evaluation. | [optional] 
**iep_review_date** | **\\DateTime** | The date of the last IEP review. | [optional] 
**iep_begin_date** | **\\DateTime** | The effective date of the most recent IEP. | [optional] 
**iep_end_date** | **\\DateTime** | The end date of the most recent IEP. | [optional] 
**services** | [**\Swagger\Client\Model\StudentProgramAssociationService[]**](StudentProgramAssociationService.md) | An unordered collection of studentProgramAssociationServices.  Indicates the services being provided to the student by the program. | [optional] 
**service_providers** | [**\Swagger\Client\Model\StudentSpecialEducationProgramAssociationServiceProvider[]**](StudentSpecialEducationProgramAssociationServiceProvider.md) | An unordered collection of studentSpecialEducationProgramAssociationServiceProviders.  The staff providing Special Education services to the student. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


