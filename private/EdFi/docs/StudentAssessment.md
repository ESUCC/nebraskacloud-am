# StudentAssessment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**assessment_reference** | [**\Swagger\Client\Model\AssessmentReference**](AssessmentReference.md) | A reference to the related Assessment resource. | [optional] 
**student_reference** | [**\Swagger\Client\Model\StudentReference**](StudentReference.md) | A reference to the related Student resource. | [optional] 
**administration_date** | **\\DateTime** | The month(s), day(s), and year on which an assessment is administered or first day of administration if over multiple days. | [optional] 
**administration_end_date** | **\\DateTime** | Assessment Administration End Date, if administered over multiple days. | [optional] 
**serial_number** | **string** | The unique number for the assessment form or answer document. | [optional] 
**administration_language_descriptor** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**administration_environment_type** | **string** | The environment in which the test was administered.  For example:  Electronic  Classroom  Testing Center  ...  .... | [optional] 
**retest_indicator_type** | **string** | Indicator if the test was retaken.  For example:  Primary administration  First retest  Second retest  ... | [optional] 
**reason_not_tested_type** | **string** | The primary reason student is not tested. For example:  Absent  Refusal by parent  Refusal by student  Medical waiver  Illness  Disruptive behavior  LEP Exempt  ... | [optional] 
**when_assessed_grade_level_descriptor** | **string** | The grade level of a student when assessed. | [optional] 
**event_circumstance_type** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**event_description** | **string** | Describes special events that occur before during or after the assessment session that may impact use of results. | [optional] 
**accommodations** | [**\Swagger\Client\Model\StudentAssessmentAccommodation[]**](StudentAssessmentAccommodation.md) | An unordered collection of studentAssessmentAccommodations.  The specific type of special variation used in how an examination is presented, how it is administered or how the test taker is allowed to respond. This generally refers to changes that do not substantially alter what the examination measures. The proper use of accommodations does not substantially change academic level or performance criteria (e.g., Braille, Enlarged Monitor View, Extra Time, Large Print, Setting, Oral Administration). | [optional] 
**items** | [**\Swagger\Client\Model\StudentAssessmentItem[]**](StudentAssessmentItem.md) | An unordered collection of studentAssessmentItems.  This entity represents the student&#39;s response to an assessment item and the item-level scores such as correct, incorrect, or met standard. | [optional] 
**performance_levels** | [**\Swagger\Client\Model\StudentAssessmentPerformanceLevel[]**](StudentAssessmentPerformanceLevel.md) | An unordered collection of studentAssessmentPerformanceLevels.  Indicates the various levels or thresholds for the performance achieved by the student on the assessment. | [optional] 
**score_results** | [**\Swagger\Client\Model\StudentAssessmentScoreResult[]**](StudentAssessmentScoreResult.md) | An unordered collection of studentAssessmentScoreResults.  A meaningful raw score or statistical expression of the performance of an individual. The results can be expressed as a number, percentile, range, level, etc. | [optional] 
**student_objective_assessments** | [**\Swagger\Client\Model\StudentAssessmentStudentObjectiveAssessment[]**](StudentAssessmentStudentObjectiveAssessment.md) | An unordered collection of studentAssessmentStudentObjectiveAssessments.  This entity holds the score and or performance levels earned for an objective assessment by a student. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


