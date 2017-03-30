# Course

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**education_organization_reference** | [**\Swagger\Client\Model\EducationOrganizationReference**](EducationOrganizationReference.md) | A reference to the related EducationOrganization resource. | [optional] 
**code** | **string** | TThe actual code that identifies the organization of subject matter and related learning experiences provided for the instruction of students. | [optional] 
**title** | **string** | The descriptive name given to a course of study offered in a school or other institution or organization. In departmentalized classes at the elementary, secondary, and postsecondary levels (and for staff development activities), this refers to the name by which a course is identified (e.g., American History, English III). For elementary and other non-departmentalized classes, it refers to any portion of the instruction for which a grade or report is assigned (e.g., reading, composition, spelling, and language arts). | [optional] 
**number_of_parts** | **int** | The number of parts identified for a course. | [optional] 
**academic_subject_descriptor** | **string** | The intended major subject area of the course.  NEDM: Secondary Course Subject Area | [optional] 
**description** | **string** | A description of the content standards and goals covered in the course. Reference may be made to state or national content standards.  NEDM: Course Description | [optional] 
**date_course_adopted** | **\\DateTime** | Date the course was adopted by the education agency. | [optional] 
**high_school_course_requirement** | **bool** | An indication that this course may satisfy high school graduation requirements in the course&#39;s subject area. | [optional] 
**gpa_applicability_type** | **string** | An indicator of whether or not this course being described is included in the computation of the student&#39;s Grade Point Average, and if so, if it weighted differently from regular courses. | [optional] 
**defined_by_type** | **string** | Key for CourseDefinedByType. | [optional] 
**minimum_available_credit_type** | **string** | Key for Credit | [optional] 
**minimum_available_credit_conversion** | [**Number**](Number.md) | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional] 
**minimum_available_credits** | [**Number**](Number.md) | The minimum amount of credit available to a student who successfully completes the course | [optional] 
**maximum_available_credit_type** | **string** | Key for Credit | [optional] 
**maximum_available_credit_conversion** | [**Number**](Number.md) | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional] 
**maximum_available_credits** | [**Number**](Number.md) | The maximum amount of credit available to a student who successfully completes the course | [optional] 
**career_pathway_type** | **string** | Key for CareerPathway | [optional] 
**time_required_for_completion** | **int** | The actual or estimated number of clock minutes required for class completion. This number is especially important for career and technical education classes and may represent (in minutes) the clock hour requirement of the class. | [optional] 
**competency_levels** | [**\Swagger\Client\Model\CourseCompetencyLevel[]**](CourseCompetencyLevel.md) | An unordered collection of courseCompetencyLevels.  The competency levels defined to rate the student for the course. | [optional] 
**identification_codes** | [**\Swagger\Client\Model\CourseIdentificationCode[]**](CourseIdentificationCode.md) | An unordered collection of courseIdentificationCodes.  A standard code that identifies the organization of subject matter and related learning experiences provided for the instruction of students. | [optional] 
**learning_objectives** | [**\Swagger\Client\Model\CourseLearningObjective[]**](CourseLearningObjective.md) | An unordered collection of courseLearningObjectives.  Learning Objectives to be mastered in the course. | [optional] 
**learning_standards** | [**\Swagger\Client\Model\CourseLearningStandard[]**](CourseLearningStandard.md) | An unordered collection of courseLearningStandards.  Learning Standard(s) to be taught by the course. | [optional] 
**level_characteristics** | [**\Swagger\Client\Model\CourseLevelCharacteristic[]**](CourseLevelCharacteristic.md) | An unordered collection of courseLevelCharacteristics.  Indication of the nature and difficulty of instruction: Remedial, Basic, Honors, AP, IB, Dual Credit, CTE, etc. | [optional] 
**offered_grade_levels** | [**\Swagger\Client\Model\CourseOfferedGradeLevel[]**](CourseOfferedGradeLevel.md) | An unordered collection of courseOfferedGradeLevels.  The grade levels in which the course is offered. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


