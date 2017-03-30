# StudentSummaryAttendance

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 
**absent_days_total** | [**Number**](Number.md) | The total number of days within the Reporting Period, which begins at the Period Start Date and ends at the Period End Date, that the student was marked as absent from the location/school.  This field should be used to summarize all absences - excused and unexcused.  Days Absent can store up to one decimal place to handle cases where Days Absent is defined in fractions of a full day, in which case the decimal point must be provided. | 
**attendance_period_end_date** | [**\DateTime**](\DateTime.md) | The ending date of the Reporting Period for the aggregated attendance and enrollment information in the ISO format YYYY-MM-DD | 
**attendance_period_start_date** | [**\DateTime**](\DateTime.md) | The beginning date of the Reporting Period for the aggregated attendance and enrollment information in the ISO format YYYY-MM-DD. | 
**full_time_equivalency** | **int** | The full-time equivalence (FTE) of student assignment to a public school or district for services or instruction. Determining FTE should be based on the student&#39;s program. | 
**id** | **string** | The unique identifier of the resource. | 
**present_days_total** | [**Number**](Number.md) | The total number of days within the Reporting Period, which begins at the Period Start Date and ends at the Period End Date, that the student was marked as present at the location/school. Days Present can store up to one decimal place to handle cases where Days Persent is defined in fractions of a full day, in which case the decimal point must be provided. | 
**school_reference** | [**\Swagger\Client\Model\SchoolReference**](SchoolReference.md) | A reference to the related School resource. | 
**school_year_type_reference** | [**\Swagger\Client\Model\SchoolYearTypeReference**](SchoolYearTypeReference.md) | A reference to the related SchoolYearType resource. | 
**student_reference** | [**\Swagger\Client\Model\StudentReference**](StudentReference.md) | A reference to the related Student resource. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


