# LocalEducationAgency

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**education_service_center_reference** | [**\Swagger\Client\Model\EducationServiceCenterReference**](EducationServiceCenterReference.md) | A reference to the related EducationServiceCenter resource. | [optional] 
**parent_local_education_agency_reference** | [**\Swagger\Client\Model\LocalEducationAgencyReference**](LocalEducationAgencyReference.md) | A reference to the related LocalEducationAgency resource. | [optional] 
**state_education_agency_reference** | [**\Swagger\Client\Model\StateEducationAgencyReference**](StateEducationAgencyReference.md) | A reference to the related StateEducationAgency resource. | [optional] 
**local_education_agency_id** | **int** | The identifier assigned to a local education agency by the State Education Agency (SEA). | [optional] 
**state_organization_id** | **string** | The identifier assigned to an education agency by the State Education Agency (SEA).  Also known as the State LEP ID.  NEDM: IdentificationCode, LEA Identifier (State) | [optional] 
**name_of_institution** | **string** | The full, legally accepted name of the institution.  NEDM: Name of Institution | [optional] 
**short_name_of_institution** | **string** | A short name for the institution. | [optional] 
**web_site** | **string** | The public web site address (URL) for the educational organization. | [optional] 
**operational_status_type** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**category_type** | **string** | Key for LEACategory | [optional] 
**charter_status_type** | **string** | Key for CharterStatus | [optional] 
**addresses** | [**\Swagger\Client\Model\EducationOrganizationAddress[]**](EducationOrganizationAddress.md) | An unordered collection of educationOrganizationAddresses.  The set of elements that describes an address, including the street address, city, state and ZIP code. | [optional] 
**education_organization_categories** | [**\Swagger\Client\Model\EducationOrganizationCategory[]**](EducationOrganizationCategory.md) | An unordered collection of educationOrganizationCategories.  The classification of the education agency within the geographic boundaries of a state according to the level of administrative and operational control granted by the state. | [optional] 
**identification_codes** | [**\Swagger\Client\Model\EducationOrganizationIdentificationCode[]**](EducationOrganizationIdentificationCode.md) | An unordered collection of educationOrganizationIdentificationCodes.  A unique number or alphanumeric code that is assigned to an education organization by a school, school system, state, or other agency or entity. | [optional] 
**institution_telephones** | [**\Swagger\Client\Model\EducationOrganizationInstitutionTelephone[]**](EducationOrganizationInstitutionTelephone.md) | An unordered collection of educationOrganizationInstitutionTelephones.  The 10-digit telephone number, including the area code, for the person. | [optional] 
**international_addresses** | [**\Swagger\Client\Model\EducationOrganizationInternationalAddress[]**](EducationOrganizationInternationalAddress.md) | An unordered collection of educationOrganizationInternationalAddresses.  The set of elements that describes an address, including the street address and country for international students. | [optional] 
**accountabilities** | [**\Swagger\Client\Model\LocalEducationAgencyAccountability[]**](LocalEducationAgencyAccountability.md) | An unordered collection of localEducationAgencyAccountabilities.  This entity maintains information about federal reporting and accountability for Local Education Agencies. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


