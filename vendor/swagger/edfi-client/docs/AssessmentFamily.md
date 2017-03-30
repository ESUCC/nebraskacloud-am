# AssessmentFamily

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**parent_assessment_family_reference** | [**\Swagger\Client\Model\AssessmentFamilyReference**](AssessmentFamilyReference.md) | A reference to the related AssessmentFamily resource. | [optional] 
**title** | **string** | The title or name of the assessment family. | [optional] 
**assessment_category_descriptor** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**academic_subject_descriptor** | **string** | Key for AcademicSubject | [optional] 
**assessed_grade_level_descriptor** | **string** | Key for GradeLevel | [optional] 
**lowest_assessed_grade_level_descriptor** | **string** | Key for GradeLevel | [optional] 
**version** | **int** | The version identifier for the assessment. | [optional] 
**revision_date** | **\\DateTime** | The month, day, and year that the conceptual design for the AssessmentFamily was most recently revised substantially. | [optional] 
**nomenclature** | **string** | Reflects the common nomenclature for an element. | [optional] 
**namespace** | **string** | Namespace for the Assessments in this AssessmentFamily. | [optional] 
**content_standard** | [**\Swagger\Client\Model\AssessmentFamilyContentStandard**](AssessmentFamilyContentStandard.md) | An indication as to whether an assessment conforms to a standard (e.g., local standard, statewide standard, regional standard, association standard). | [optional] 
**assessment_periods** | [**\Swagger\Client\Model\AssessmentFamilyAssessmentPeriod[]**](AssessmentFamilyAssessmentPeriod.md) | An unordered collection of assessmentFamilyAssessmentPeriods.  The periods or windows defined in which an assessment is supposed to be administered. | [optional] 
**identification_codes** | [**\Swagger\Client\Model\AssessmentFamilyIdentificationCode[]**](AssessmentFamilyIdentificationCode.md) | An unordered collection of assessmentFamilyIdentificationCodes.  A unique number or alphanumeric code assigned to an assessment family by a school, school system, a state, or other agency or entity. | [optional] 
**languages** | [**\Swagger\Client\Model\AssessmentFamilyLanguage[]**](AssessmentFamilyLanguage.md) | An unordered collection of assessmentFamilyLanguages.  An indication of the languages in which the Assessment Family is designed. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


