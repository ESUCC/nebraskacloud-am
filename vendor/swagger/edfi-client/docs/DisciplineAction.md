# DisciplineAction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**assignment_school_reference** | [**\Swagger\Client\Model\SchoolReference**](SchoolReference.md) | A reference to the related School resource. | [optional] 
**responsibility_school_reference** | [**\Swagger\Client\Model\SchoolReference**](SchoolReference.md) | A reference to the related School resource. | [optional] 
**student_reference** | [**\Swagger\Client\Model\StudentReference**](StudentReference.md) | A reference to the related Student resource. | [optional] 
**identifier** | **string** | Identifier assigned by the education organization to the discipline action. | [optional] 
**discipline_date** | **\\DateTime** | The date of the DisciplineAction. | [optional] 
**length** | **int** | The length of time in school days for the Discipline Action (e.g. removal, detention), if applicable. | [optional] 
**actual_discipline_action_length** | **int** | Indicates the actual length in school days of a student&#39;s disciplinary assignment. | [optional] 
**length_difference_reason_type** | **string** | Key for DisciplineActionLengthDifferenceReason | [optional] 
**related_to_zero_tolerance_policy** | **bool** | An indication of whether or not this disciplinary action taken against a student was imposed as a consequence of state or local zero tolerance policies. | [optional] 
**disciplines** | [**\Swagger\Client\Model\DisciplineActionDiscipline[]**](DisciplineActionDiscipline.md) | An unordered collection of disciplineActionDisciplines.  Type of action, such as removal from the classroom, used to discipline the student involved as a perpetrator in a discipline incident. | [optional] 
**discipline_incidents** | [**\Swagger\Client\Model\DisciplineActionDisciplineIncident[]**](DisciplineActionDisciplineIncident.md) | An unordered collection of disciplineActionDisciplineIncidents.   | [optional] 
**staffs** | [**\Swagger\Client\Model\DisciplineActionStaff[]**](DisciplineActionStaff.md) | An unordered collection of disciplineActionStaffs.  The staff responsible for enforcing the discipline action. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


