# ReportCard

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**education_organization_reference** | [**\Swagger\Client\Model\EducationOrganizationReference**](EducationOrganizationReference.md) | A reference to the related EducationOrganization resource. | [optional] 
**grading_period_reference** | [**\Swagger\Client\Model\GradingPeriodReference**](GradingPeriodReference.md) | A reference to the related GradingPeriod resource. | [optional] 
**student_reference** | [**\Swagger\Client\Model\StudentReference**](StudentReference.md) | A reference to the related Student resource. | [optional] 
**gpa_given_grading_period** | [**Number**](Number.md) | A measure of average performance in all courses taken by an individual for the current grading period. | [optional] 
**gpa_cumulative** | [**Number**](Number.md) | A measure of cumulative average performance in all courses taken by an individual from the beginning of the school year through the current grading period. | [optional] 
**number_of_days_absent** | [**Number**](Number.md) | The number of days an individual is absent when school is in session during a given reporting period. | [optional] 
**number_of_days_in_attendance** | [**Number**](Number.md) | The number of days an individual is present when school is in session during a given reporting period. | [optional] 
**number_of_days_tardy** | **int** | The number of days an individual is tardy during a given reporting period. | [optional] 
**grades** | [**\Swagger\Client\Model\ReportCardGrade[]**](ReportCardGrade.md) | An unordered collection of reportCardGrades.  Grades for the classes attended by the student for this grading period. | [optional] 
**student_competency_objectives** | [**\Swagger\Client\Model\ReportCardStudentCompetencyObjective[]**](ReportCardStudentCompetencyObjective.md) | An unordered collection of reportCardStudentCompetencyObjectives.  The student competency evaluations associated for this grading period. | [optional] 
**student_learning_objectives** | [**\Swagger\Client\Model\ReportCardStudentLearningObjective[]**](ReportCardStudentLearningObjective.md) | An unordered collection of reportCardStudentLearningObjectives.   | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


