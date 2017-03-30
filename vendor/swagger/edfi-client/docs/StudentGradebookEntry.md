# StudentGradebookEntry

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**gradebook_entry_reference** | [**\Swagger\Client\Model\GradebookEntryReference**](GradebookEntryReference.md) | A reference to the related GradebookEntry resource. | [optional] 
**student_section_association_reference** | [**\Swagger\Client\Model\StudentSectionAssociationReference**](StudentSectionAssociationReference.md) | A reference to the related StudentSectionAssociation resource. | [optional] 
**date_fulfilled** | **\\DateTime** | The date an assignment was turned in or the date of an assessment. | [optional] 
**letter_grade_earned** | **string** | A final or interim (grading period) indicator of student performance in a class as submitted by the instructor. | [optional] 
**numeric_grade_earned** | [**Number**](Number.md) | A final or interim (grading period) indicator of student performance in a class as submitted by the instructor. | [optional] 
**competency_level_descriptor** | **string** | The competency level assessed for the student for the referenced learning objective. | [optional] 
**diagnostic_statement** | **string** | A statement provided by the teacher that provides information in addition to the grade or assessment score. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


