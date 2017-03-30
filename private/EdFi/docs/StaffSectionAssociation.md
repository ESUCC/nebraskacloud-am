# StaffSectionAssociation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**section_reference** | [**\Swagger\Client\Model\SectionReference**](SectionReference.md) | A reference to the related Section resource. | [optional] 
**staff_reference** | [**\Swagger\Client\Model\StaffReference**](StaffReference.md) | A reference to the related Staff resource. | [optional] 
**classroom_position_descriptor** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**begin_date** | **\\DateTime** | Month, day, and year of a teacher&#39;s assignment to the Section. If blank, defaults to the first day of the first grading period for the Section. | [optional] 
**end_date** | **\\DateTime** | Month, day, and year of the last day of a staff member&#39;s assignment to the Section. | [optional] 
**highly_qualified_teacher** | **bool** | An indication of whether a teacher is classified as highly qualified for his/her assignment according to state definition. This attribute indicates the teacher is highly qualified for this section being taught. | [optional] 
**teacher_student_data_link_exclusion** | **bool** | Indicates that the entire section is excluded from calculation of value-added or growth attribution calculations used for a particular teacher evaluation. | [optional] 
**percentage_contribution** | [**Number**](Number.md) | Indicates the percentage of the total scheduled course time, academic standards, and/or learning activities delivered in this section by this staff member. A teacher of record designation may be based solely or partially on this contribution percentage. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


