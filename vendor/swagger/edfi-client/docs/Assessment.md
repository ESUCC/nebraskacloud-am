# Assessment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**assessment_family_reference** | [**\Swagger\Client\Model\AssessmentFamilyReference**](AssessmentFamilyReference.md) | A reference to the related AssessmentFamily resource. | [optional] 
**title** | **string** | The title or name of the assessment.  NEDM: Assessment Title | [optional] 
**assessed_grade_level_descriptor** | **string** | The typical grade level for which an assessment is designed. If the test assessment spans a range of grades, then this attribute holds the highest grade assessed.  If only one grade level is assessed, then only this attribute is used. For example:  Adult  Prekindergarten  First grade  Second grade  ... | [optional] 
**academic_subject_descriptor** | **string** | The description of the content or subject area (e.g., arts, mathematics, reading, stenography, or a foreign language) of an assessment.  NEDM: Assessment Content, Academic Subject | [optional] 
**version** | **int** | The version identifier for the assessment. | [optional] 
**category_descriptor** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**lowest_assessed_grade_level_descriptor** | **string** | If the test assessment spans a range of grades, then this attribute holds the lowest grade assessed.  If only one grade level is assessed, then this attribute is omitted. For example:  Adult  Prekindergarten  First grade  Second grade  ... | [optional] 
**form** | **string** | Identifies the form of the assessment, for example a regular versus makeup form, multiple choice versus constructed response, etc. | [optional] 
**revision_date** | **\\DateTime** | The month, day, and year that the conceptual design for the assessment was most recently revised substantially. | [optional] 
**max_raw_score** | **int** | The maximum raw score achievable across all assessment items that are correct and scored at the maximum. | [optional] 
**nomenclature** | **string** | Reflects the common nomenclature for an element. | [optional] 
**period_descriptor** | **string** | The ID of the Assessment Period Descriptor | [optional] 
**namespace** | **string** | Namespace for the Assessment. | [optional] 
**content_standard** | [**\Swagger\Client\Model\AssessmentContentStandard**](AssessmentContentStandard.md) | An indication as to whether an assessment conforms to a standard. | [optional] 
**identification_codes** | [**\Swagger\Client\Model\AssessmentIdentificationCode[]**](AssessmentIdentificationCode.md) | An unordered collection of assessmentIdentificationCodes.  A unique number or alphanumeric code assigned to an assessment by a school, school system, a state, or other agency or entity. | [optional] 
**languages** | [**\Swagger\Client\Model\AssessmentLanguage[]**](AssessmentLanguage.md) | An unordered collection of assessmentLanguages.  An indication of the languages in which the Assessment is designed. | [optional] 
**performance_levels** | [**\Swagger\Client\Model\AssessmentPerformanceLevel[]**](AssessmentPerformanceLevel.md) | An unordered collection of assessmentPerformanceLevels.  Definition of the performance levels and the associated cut scores. Three styles are supported: 1. Specification of performance level by minimum and maximum score 2. Specification of performance level by cut score, using only minimum score 3. Specification of performance level without any mapping to scores . | [optional] 
**programs** | [**\Swagger\Client\Model\AssessmentProgram[]**](AssessmentProgram.md) | An unordered collection of assessmentPrograms.  The programs associated with the Assessment. | [optional] 
**scores** | [**\Swagger\Client\Model\AssessmentScore[]**](AssessmentScore.md) | An unordered collection of assessmentScores.  Definition of the scores to be expected from this assessment. | [optional] 
**sections** | [**\Swagger\Client\Model\AssessmentSection[]**](AssessmentSection.md) | An unordered collection of assessmentSections.  The section(s) to which the Assessment is associated. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


