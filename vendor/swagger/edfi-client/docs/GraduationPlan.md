# GraduationPlan

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**education_organization_reference** | [**\Swagger\Client\Model\EducationOrganizationReference**](EducationOrganizationReference.md) | A reference to the related EducationOrganization resource. | [optional] 
**graduation_school_year_type_reference** | [**\Swagger\Client\Model\SchoolYearTypeReference**](SchoolYearTypeReference.md) | A reference to the related SchoolYearType resource. | [optional] 
**type_descriptor** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**individual_plan** | **bool** | An indicator of whether the GraduationPlan is tailored for an individual. | [optional] 
**total_required_credits** | [**Number**](Number.md) | The total number of credits required for graduation under this plan. | [optional] 
**total_required_credit_type** | **string** | Key for Credit | [optional] 
**total_required_credit_conversion** | [**Number**](Number.md) | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional] 
**credits_by_courses** | [**\Swagger\Client\Model\GraduationPlanCreditsByCourse[]**](GraduationPlanCreditsByCourse.md) | An unordered collection of graduationPlanCreditsByCourses.  The total credits required for graduation by taking a specific course, or by taking one or more from a set of courses. | [optional] 
**credits_by_subjects** | [**\Swagger\Client\Model\GraduationPlanCreditsBySubject[]**](GraduationPlanCreditsBySubject.md) | An unordered collection of graduationPlanCreditsBySubjects.  The total number of credits required in a subject to graduate.  Only those courses identified as a high school course requirement are eligible to meet subject credit requirements. | [optional] 
**required_assessments** | [**\Swagger\Client\Model\GraduationPlanRequiredAssessment[]**](GraduationPlanRequiredAssessment.md) | An unordered collection of graduationPlanRequiredAssessments.  The total credits required for graduation by taking a specific course, or by taking one or more from a set of courses. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


