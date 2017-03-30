# School

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**local_education_agency_reference** | [**\Swagger\Client\Model\LocalEducationAgencyReference**](LocalEducationAgencyReference.md) | A reference to the related LocalEducationAgency resource. | [optional] 
**charter_approval_school_year_type_reference** | [**\Swagger\Client\Model\SchoolYearTypeReference**](SchoolYearTypeReference.md) | A reference to the related SchoolYearType resource. | [optional] 
**school_id** | **int** | The identifier assigned to a school by the State Education Agency (SEA). | [optional] 
**state_organization_id** | **string** | The identifier assigned to an education agency by the State Education Agency (SEA).  Also known as the State LEP ID.  NEDM: IdentificationCode, LEA Identifier (State) | [optional] 
**name_of_institution** | **string** | The full, legally accepted name of the institution.  NEDM: Name of Institution | [optional] 
**short_name_of_institution** | **string** | A short name for the institution. | [optional] 
**web_site** | **string** | The public web site address (URL) for the educational organization. | [optional] 
**operational_status_type** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**type** | **string** | The instructional categorization of the school (e.g., Regular, Alternative) | [optional] 
**charter_status_type** | **string** | A school or agency providing free public elementary or secondary education to eligible students under a specific charter granted by the state legislature or other appropriate authority and designated by such authority to be a charter school. | [optional] 
**title_i_part_a_school_designation_type** | **string** | Denotes the Title I Part A designation for the school. | [optional] 
**magnet_special_program_emphasis_school_type** | **string** | A school that has been designed: 1) to attract students of different racial/ethnic backgrounds for the purpose of reducing, preventing, or eliminating racial isolation; and/or 2)to provide an academic or social focus on a particular theme (e.g., science/math, performing arts, gifted/talented, or foreign language). | [optional] 
**administrative_funding_control_descriptor** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**internet_access_type** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**charter_approval_agency_type** | **string** | Key for MagnetSpecialProgramEmphasisSchool | [optional] 
**addresses** | [**\Swagger\Client\Model\EducationOrganizationAddress[]**](EducationOrganizationAddress.md) | An unordered collection of educationOrganizationAddresses.  The set of elements that describes an address, including the street address, city, state and ZIP code. | [optional] 
**education_organization_categories** | [**\Swagger\Client\Model\EducationOrganizationCategory[]**](EducationOrganizationCategory.md) | An unordered collection of educationOrganizationCategories.  The classification of the education agency within the geographic boundaries of a state according to the level of administrative and operational control granted by the state. | [optional] 
**identification_codes** | [**\Swagger\Client\Model\EducationOrganizationIdentificationCode[]**](EducationOrganizationIdentificationCode.md) | An unordered collection of educationOrganizationIdentificationCodes.  A unique number or alphanumeric code that is assigned to an education organization by a school, school system, state, or other agency or entity. | [optional] 
**institution_telephones** | [**\Swagger\Client\Model\EducationOrganizationInstitutionTelephone[]**](EducationOrganizationInstitutionTelephone.md) | An unordered collection of educationOrganizationInstitutionTelephones.  The 10-digit telephone number, including the area code, for the person. | [optional] 
**international_addresses** | [**\Swagger\Client\Model\EducationOrganizationInternationalAddress[]**](EducationOrganizationInternationalAddress.md) | An unordered collection of educationOrganizationInternationalAddresses.  The set of elements that describes an address, including the street address and country for international students. | [optional] 
**school_categories** | [**\Swagger\Client\Model\SchoolCategory[]**](SchoolCategory.md) | An unordered collection of schoolCategories.  The category of school. (e.g., High School, Middle School or Elementary School). | [optional] 
**grade_levels** | [**\Swagger\Client\Model\SchoolGradeLevel[]**](SchoolGradeLevel.md) | An unordered collection of schoolGradeLevels.  The grade levels served at the school. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


