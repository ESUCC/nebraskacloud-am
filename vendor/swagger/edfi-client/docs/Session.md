# Session

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**school_reference** | [**\Swagger\Client\Model\SchoolReference**](SchoolReference.md) | A reference to the related School resource. | [optional] 
**school_year_type_reference** | [**\Swagger\Client\Model\SchoolYearTypeReference**](SchoolYearTypeReference.md) | A reference to the related SchoolYearType resource. | [optional] 
**term_descriptor** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**name** | **string** | The identifier for the calendar for the academic session (e.g., 2010/11, 2011 Summer).  NEDM: Session Type | [optional] 
**begin_date** | **\\DateTime** | Month, day, and year of the first day of the Session. | [optional] 
**end_date** | **\\DateTime** | Month, day, and year of the last day of the Session. | [optional] 
**total_instructional_days** | **int** | The total number of instructional days in the school calendar. | [optional] 
**academic_weeks** | [**\Swagger\Client\Model\SessionAcademicWeek[]**](SessionAcademicWeek.md) | An unordered collection of sessionAcademicWeeks.   | [optional] 
**grading_periods** | [**\Swagger\Client\Model\SessionGradingPeriod[]**](SessionGradingPeriod.md) | An unordered collection of sessionGradingPeriods.  Grading periods associated with the session calendar. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


