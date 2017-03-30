# Program

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**education_organization_reference** | [**\Swagger\Client\Model\EducationOrganizationReference**](EducationOrganizationReference.md) | A reference to the related EducationOrganization resource. | [optional] 
**type** | **string** | Key for Program | [optional] 
**name** | **string** | The formal name of the program of instruction, training, services or benefits available through federal, state, or local agencies. | [optional] 
**program_id** | **string** | A unique number or alphanumeric code assigned to a program by a school, school system, a state, or other agency or entity. | [optional] 
**sponsor_type** | **string** | Key for ProgramSponsor | [optional] 
**characteristics** | [**\Swagger\Client\Model\ProgramCharacteristic[]**](ProgramCharacteristic.md) | An unordered collection of programCharacteristics.  Reflects important characteristics of the Program, such as categories or particular indications. | [optional] 
**learning_objectives** | [**\Swagger\Client\Model\ProgramLearningObjective[]**](ProgramLearningObjective.md) | An unordered collection of programLearningObjectives.  Learning Standard followed by this program. | [optional] 
**learning_standards** | [**\Swagger\Client\Model\ProgramLearningStandard[]**](ProgramLearningStandard.md) | An unordered collection of programLearningStandards.  References the Learning Objective(s) the Program is associated with. | [optional] 
**services** | [**\Swagger\Client\Model\ProgramService[]**](ProgramService.md) | An unordered collection of programServices.  Defines the services this program provides to students. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


