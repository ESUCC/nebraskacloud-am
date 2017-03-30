# Section

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**class_period_reference** | [**\Swagger\Client\Model\ClassPeriodReference**](ClassPeriodReference.md) | A reference to the related ClassPeriod resource. | [optional] 
**course_offering_reference** | [**\Swagger\Client\Model\CourseOfferingReference**](CourseOfferingReference.md) | A reference to the related CourseOffering resource. | [optional] 
**location_reference** | [**\Swagger\Client\Model\LocationReference**](LocationReference.md) | A reference to the related Location resource. | [optional] 
**school_reference** | [**\Swagger\Client\Model\SchoolReference**](SchoolReference.md) | A reference to the related School resource. | [optional] 
**unique_section_code** | **string** | A unique identifier for the Section, that is defined by the classroom, the subjects taught, and the instructors that are assigned. | [optional] 
**sequence_of_course** | **int** | When a Section is part of a sequence of parts for a course, the number if the sequence. If the course has only one part, the value of this Section attribute should be 1. | [optional] 
**educational_environment_type** | **string** | The setting in which a child receives education and related services; for example:  Center-based instruction  Home-based instruction  Hospital class  Mainstream  Residential care and treatment facility  .... | [optional] 
**medium_of_instruction_type** | **string** | The media through which teachers provide instruction to students and students and teachers communicate about instructional matters; for example:  Technology-based instruction in classroom  Correspondence instruction  Face-to-face instruction  Virtual/On-line Distance learning  Center-based instruction  ... | [optional] 
**population_served_type** | **string** | The population for which the course was designed; for example:  Bilingual students  Remedial education students  Gifted and talented students  Career and Technical Education students  Special education students  .... | [optional] 
**available_credit_type** | **string** | The type of credits or units of value awarded for the completion of a course. | [optional] 
**available_credit_conversion** | [**Number**](Number.md) | Conversion factor that when multiplied by the number of credits is equivalent to Carnegie units. | [optional] 
**instruction_language_descriptor** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**available_credits** | [**Number**](Number.md) | Credits or units of value awarded for the completion of a course. | [optional] 
**characteristics** | [**\Swagger\Client\Model\SectionCharacteristic[]**](SectionCharacteristic.md) | An unordered collection of sectionCharacteristics.  Reflects important characteristics of the Section, such as whether or not attendance is taken and the Section is graded. | [optional] 
**programs** | [**\Swagger\Client\Model\SectionProgram[]**](SectionProgram.md) | An unordered collection of sectionPrograms.  Optional reference to program (e.g., CTE) to which the section is associated. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


