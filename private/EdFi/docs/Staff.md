# Staff

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**staff_unique_id** | **string** | A unique alphanumeric code assigned to a staff. | [optional] 
**personal_title_prefix** | **string** | A prefix used to denote the title, degree, position, or seniority of the person. | [optional] 
**first_name** | **string** | A name given to an individual at birth, baptism, or during another naming ceremony, or through legal change. | [optional] 
**middle_name** | **string** | A secondary name given to an individual at birth, baptism, or during another naming ceremony. | [optional] 
**last_surname** | **string** | The name borne in common by members of a family. | [optional] 
**generation_code_suffix** | **string** | An appendage, if any, used to denote an individual&#39;s generation in his family (e.g., Jr., Sr., III). | [optional] 
**maiden_name** | **string** | The person&#39;s maiden name. | [optional] 
**sex_type** | **string** | A person&#39;&#39;s gender. | [optional] 
**birth_date** | **\\DateTime** | The month, day, and year on which an individual was born. | [optional] 
**hispanic_latino_ethnicity** | **bool** | An indication that the individual traces his or her origin or descent to Mexico, Puerto Rico, Cuba, Central, and South America, and other Spanish cultures, regardless of race. The term, \&quot;Spanish origin,\&quot; can be used in addition to \&quot;Hispanic or Latino.\&quot; | [optional] 
**old_ethnicity_type** | **string** | Previous definition of Ethnicity combining Hispanic/latino and race:  1 - American Indian or Alaskan Native  2 - Asian or Pacific Islander  3 - Black, not of Hispanic origin  4 - Hispanic  5 - White, not of Hispanic origin | [optional] 
**highest_completed_level_of_education_descriptor** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**years_of_prior_professional_experience** | [**Number**](Number.md) | The total number of years that an individual has previously held a similar professional position in one or more education institutions. | [optional] 
**years_of_prior_teaching_experience** | [**Number**](Number.md) | The total number of years that an individual has previously held a teaching position in one or more education institutions. | [optional] 
**highly_qualified_teacher** | **bool** | An indication of whether a teacher is classified as highly qualified for his/her assignment according to state definition. This attribute indicates the teacher is highly qualified for ALL Sections being taught. | [optional] 
**login_id** | **string** | The login ID for the user; used for security access control interface. | [optional] 
**citizenship_status_type** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**addresses** | [**\Swagger\Client\Model\StaffAddress[]**](StaffAddress.md) | An unordered collection of staffAddresses.  The set of elements that describes an address, including the street address, city, state and ZIP code. | [optional] 
**credentials** | [**\Swagger\Client\Model\StaffCredential[]**](StaffCredential.md) | An unordered collection of staffCredentials.  The legal document giving authorization to perform teaching assignment services. | [optional] 
**electronic_mails** | [**\Swagger\Client\Model\StaffElectronicMail[]**](StaffElectronicMail.md) | An unordered collection of staffElectronicMails.  The numbers, letters and symbols used to identify an electronic mail (e-mail) user within the network to which the individual or organization belongs. | [optional] 
**identification_codes** | [**\Swagger\Client\Model\StaffIdentificationCode[]**](StaffIdentificationCode.md) | An unordered collection of staffIdentificationCodes.  A coding scheme that is used for identification and record-keeping purposes by schools, social services or other agencies to refer to a staff member. | [optional] 
**identification_documents** | [**\Swagger\Client\Model\StaffIdentificationDocument[]**](StaffIdentificationDocument.md) | An unordered collection of staffIdentificationDocuments.  Represents the valid document that a person uses for identification. | [optional] 
**international_addresses** | [**\Swagger\Client\Model\StaffInternationalAddress[]**](StaffInternationalAddress.md) | An unordered collection of staffInternationalAddresses.  The set of elements that describes an address, including the street address, city, state and ZIP code. | [optional] 
**languages** | [**\Swagger\Client\Model\StaffLanguage[]**](StaffLanguage.md) | An unordered collection of staffLanguages.  Language(s) the individual uses to communicate. | [optional] 
**other_names** | [**\Swagger\Client\Model\StaffOtherName[]**](StaffOtherName.md) | An unordered collection of staffOtherNames.  Other names (e.g., alias, nickname, previous legal name) associated with a person. | [optional] 
**races** | [**\Swagger\Client\Model\StaffRace[]**](StaffRace.md) | An unordered collection of staffRaces.  The general racial category which most clearly reflects the individual&#39;s recognition of his or her community or with which the individual most identifies. The way this data element is listed, it must allow for multiple entries so that each individual can specify all appropriate races. | [optional] 
**telephones** | [**\Swagger\Client\Model\StaffTelephone[]**](StaffTelephone.md) | An unordered collection of staffTelephones.  The 10-digit telephone number, including the area code, for the person. | [optional] 
**visas** | [**\Swagger\Client\Model\StaffVisa[]**](StaffVisa.md) | An unordered collection of staffVisas.  Describe the types of visa that a non-U.S. citizen staff member holds. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


