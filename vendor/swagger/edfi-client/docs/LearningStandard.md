# LearningStandard

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**parent_learning_standard_reference** | [**\Swagger\Client\Model\LearningStandardReference**](LearningStandardReference.md) | A reference to the related LearningStandard resource. | [optional] 
**learning_standard_id** | **string** | A unique number or alphanumeric code assigned to a Learning Standard. | [optional] 
**description** | **string** | A detailed description of the entity. | [optional] 
**item_code** | **string** | A code designated by the promulgating body to identify the statement, e.g. 1.N.3 (usually not globally unique). | [optional] 
**uri** | **string** | The public web site address (URL), file, or ftp locator. | [optional] 
**academic_subject_descriptor** | **string** | Subject area for the learning standard. | [optional] 
**course_title** | **string** | The descriptive name given to a course of study offered in a school or other institution or organization. In departmentalized classes at the elementary, secondary, and postsecondary levels (and for staff development activities), this refers to the name by which a course is identified (e.g., American History, English III). For elementary and other non-departmentalized classes, it refers to any portion of the instruction for which a grade or report is assigned (e.g., reading, composition, spelling, and language arts). | [optional] 
**success_criteria** | **string** | One or more statements that describes the criteria used by teachers and students to check for attainment of a learning standard. This criteria gives clear indications as to the degree to which learning is moving through the Zone or Proximal Development toward independent achievement of the LearningStandard. | [optional] 
**namespace** | **string** | Namespace for the LearningStandard. | [optional] 
**content_standard** | [**\Swagger\Client\Model\LearningStandardContentStandard**](LearningStandardContentStandard.md) | The Content Standard from which the Learning Standard was derived. | [optional] 
**grade_levels** | [**\Swagger\Client\Model\LearningStandardGradeLevel[]**](LearningStandardGradeLevel.md) | An unordered collection of learningStandardGradeLevels.   | [optional] 
**identification_codes** | [**\Swagger\Client\Model\LearningStandardIdentificationCode[]**](LearningStandardIdentificationCode.md) | An unordered collection of learningStandardIdentificationCodes.  A coding scheme that is used for identification and record-keeping purposes by schools, social services, or other agencies to refer to a learning Standard. | [optional] 
**prerequisite_learning_standards** | [**\Swagger\Client\Model\LearningStandardPrerequisiteLearningStandard[]**](LearningStandardPrerequisiteLearningStandard.md) | An unordered collection of learningStandardPrerequisiteLearningStandards.   | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


