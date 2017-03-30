# StudentAcademicRecord

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**education_organization_reference** | [**\Swagger\Client\Model\EducationOrganizationReference**](EducationOrganizationReference.md) | A reference to the related EducationOrganization resource. | [optional] 
**school_year_type_reference** | [**\Swagger\Client\Model\SchoolYearTypeReference**](SchoolYearTypeReference.md) | A reference to the related SchoolYearType resource. | [optional] 
**student_reference** | [**\Swagger\Client\Model\StudentReference**](StudentReference.md) | A reference to the related Student resource. | [optional] 
**term_descriptor** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**cumulative_earned_credit_type** | **string** | Key for Credit | [optional] 
**cumulative_earned_credit_conversion** | [**Number**](Number.md) | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional] 
**cumulative_earned_credits** | [**Number**](Number.md) | The cumulative number of credits an individual earns by completing courses or examinations during his or her enrollment in the current school as well as those credits transferred from schools in which the individual had been previously enrolled. | [optional] 
**cumulative_attempted_credit_type** | **string** | Key for Credit | [optional] 
**cumulative_attempted_credit_conversion** | [**Number**](Number.md) | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional] 
**cumulative_attempted_credits** | [**Number**](Number.md) | The cumulative number of credits an individual attempts to earn by taking courses during his or her enrollment in the current school as well as those credits transferred from schools in which the individual had been previously enrolled. | [optional] 
**cumulative_grade_points_earned** | [**Number**](Number.md) | The cumulative number of grade points an individual earns by successfully completing courses or examinations during his or her enrollment in the current school as well as those transferred from schools in which the individual had been previously enrolled. | [optional] 
**cumulative_grade_point_average** | [**Number**](Number.md) | A measure of average performance in all courses taken by an individual during his or her school career as determined for record-keeping purposes. This is obtained by dividing the total grade points received by the total number of credits attempted. This usually includes grade points received and credits attempted in his or her current school as well as those transferred from schools in which the individual was previously enrolled. | [optional] 
**grade_value_qualifier** | **string** | The scale of equivalents, if applicable, for grades awarded as indicators of performance in schoolwork. For example, numerical equivalents for letter grades used in determining a student&#39;s Grade Point Average (A=4, B=3, C=2, D=1 in a four-point system) or letter equivalents for percentage grades (90-100%=A, 80-90%=B, etc.). | [optional] 
**projected_graduation_date** | **\\DateTime** | The month and year the student is projected to graduate. | [optional] 
**session_earned_credit_type** | **string** | Key for Credit | [optional] 
**session_earned_credit_conversion** | [**Number**](Number.md) | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional] 
**session_earned_credits** | [**Number**](Number.md) | The number of an credits an individual earned in this session. | [optional] 
**session_attempted_credit_type** | **string** | Key for Credit | [optional] 
**session_attempted_credit_conversion** | [**Number**](Number.md) | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional] 
**session_attempted_credits** | [**Number**](Number.md) | The number of an credits an individual attempted to earn in this session. | [optional] 
**session_grade_points_earned** | [**Number**](Number.md) | The number of grade points an individual earned for this session. | [optional] 
**session_grade_point_average** | [**Number**](Number.md) | The grade point average for an individual computed as the grade points earned during the session divided by the number of credits attempted. | [optional] 
**class_ranking** | [**\Swagger\Client\Model\StudentAcademicRecordClassRanking**](StudentAcademicRecordClassRanking.md) | The academic rank information of a student in relation to his or her graduating class | [optional] 
**academic_honors** | [**\Swagger\Client\Model\StudentAcademicRecordAcademicHonor[]**](StudentAcademicRecordAcademicHonor.md) | An unordered collection of studentAcademicRecordAcademicHonors.   | [optional] 
**diplomas** | [**\Swagger\Client\Model\StudentAcademicRecordDiploma[]**](StudentAcademicRecordDiploma.md) | An unordered collection of studentAcademicRecordDiplomas.  This educational entity represents the conferring or certification by an educational organization that the student has successfully completed a particular course of study. It represents the electronic version of its physical document counterpart. | [optional] 
**recognitions** | [**\Swagger\Client\Model\StudentAcademicRecordRecognition[]**](StudentAcademicRecordRecognition.md) | An unordered collection of studentAcademicRecordRecognitions.  Recognition given to the student for accomplishments in a co-curricular or extra-curricular activity. | [optional] 
**report_cards** | [**\Swagger\Client\Model\StudentAcademicRecordReportCard[]**](StudentAcademicRecordReportCard.md) | An unordered collection of studentAcademicRecordReportCards.  Report cards for the student. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


