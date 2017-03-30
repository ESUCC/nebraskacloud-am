# StudentSchoolAssociation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**graduation_plan_reference** | [**\Swagger\Client\Model\GraduationPlanReference**](GraduationPlanReference.md) | A reference to the related GraduationPlan resource. | [optional] 
**school_reference** | [**\Swagger\Client\Model\SchoolReference**](SchoolReference.md) | A reference to the related School resource. | [optional] 
**class_of_school_year_type_reference** | [**\Swagger\Client\Model\SchoolYearTypeReference**](SchoolYearTypeReference.md) | A reference to the related SchoolYearType resource. | [optional] 
**school_year_type_reference** | [**\Swagger\Client\Model\SchoolYearTypeReference**](SchoolYearTypeReference.md) | A reference to the related SchoolYearType resource. | [optional] 
**student_reference** | [**\Swagger\Client\Model\StudentReference**](StudentReference.md) | A reference to the related Student resource. | [optional] 
**entry_date** | **\\DateTime** | The month, day, and year on which an individual enters and begins to receive instructional services in a school. | [optional] 
**entry_grade_level_descriptor** | **string** | The grade level or primary instructional level at which a student enters and receives services in a school or an educational institution during a given academic session. | [optional] 
**entry_grade_level_reason_type** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**entry_type_descriptor** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**repeat_grade_indicator** | **bool** | An indicator of whether the student is enrolling to repeat a grade level, either by failure or an agreement to hold the student back. | [optional] 
**school_choice_transfer** | **bool** | An indication of whether students transferred in or out of the school did so during the school year under the provisions for public school choice in accordance with Title I, Part A, Section 1116. | [optional] 
**exit_withdraw_date** | **\\DateTime** | The month, day, and year of the first day after the date of an individual&#39;s last attendance at a school (if known), the day on which an individual graduated, or the date on which it becomes known officially that an individual left school. | [optional] 
**exit_withdraw_type_descriptor** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**residency_status_descriptor** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**primary_school** | **bool** | Indicates if a given enrollment record should be considered the primary record for a student. If omitted, the default is true. | [optional] 
**employed_while_enrolled** | **bool** | An individual who is a paid employee or works in his or her own business, profession, or farm and at the same time is enrolled in secondary, postsecondary, or adult education. | [optional] 
**education_plans** | [**\Swagger\Client\Model\StudentSchoolAssociationEducationPlan[]**](StudentSchoolAssociationEducationPlan.md) | An unordered collection of studentSchoolAssociationEducationPlans.  Indicates the type of Education Plan(s) the student is following, if appropriate; for example: Special Education IEP or Vocational/CTE, etc. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


