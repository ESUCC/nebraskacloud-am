# EducationContent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the resource. | [optional] 
**learning_standard_reference** | [**\Swagger\Client\Model\LearningStandardReference**](LearningStandardReference.md) | A reference to the related LearningStandard resource. | [optional] 
**content_identifier** | **string** | The identifier of the content standard. | [optional] 
**learning_resource_metadata_uri** | **string** | The public web site address (URL), file, or ftp locator. | [optional] 
**short_description** | **string** | A shortened description for reference. | [optional] 
**description** | **string** | A detailed description of the entity. | [optional] 
**additional_authors_indicator** | **bool** | Indicates whether there are additional un-named authors. In a research report, this is often marked by the abbreviation \&quot;et al\&quot;. | [optional] 
**publisher** | **string** | The organization credited with publishing the resource. | [optional] 
**time_required** | **string** | Approximate or typical time it takes to work with or through this learning resource for the typical intended target audience. | [optional] 
**interactivity_style_type** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**content_class_type** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**use_rights_url** | **string** | The URL where the owner specifies permissions for using the resource. | [optional] 
**publication_date** | **\\DateTime** | The date on which this content was first published. | [optional] 
**publication_year** | **int** | The year at which this content was first published. | [optional] 
**version** | **string** | The version identifier for the content. | [optional] 
**cost** | [**Number**](Number.md) | An amount that has to be paid or spent to buy or obtain the EducationContent. | [optional] 
**cost_rate_type** | **string** | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | [optional] 
**namespace** | **string** | Namespace for the EducationContent. | [optional] 
**appropriate_grade_levels** | [**\Swagger\Client\Model\EducationContentAppropriateGradeLevel[]**](EducationContentAppropriateGradeLevel.md) | An unordered collection of educationContentAppropriateGradeLevels.  Grade levels for which this education content is applicable-if omitted, considered generally applicable. | [optional] 
**appropriate_sexes** | [**\Swagger\Client\Model\EducationContentAppropriateSex[]**](EducationContentAppropriateSex.md) | An unordered collection of educationContentAppropriateSexes.  Genders for which this education content is applicable-if omitted, considered generally applicable. | [optional] 
**authors** | [**\Swagger\Client\Model\EducationContentAuthor[]**](EducationContentAuthor.md) | An unordered collection of educationContentAuthors.  The individual credited with the creation of the resource. | [optional] 
**derivative_source_education_contents** | [**\Swagger\Client\Model\EducationContentDerivativeSourceEducationContent[]**](EducationContentDerivativeSourceEducationContent.md) | An unordered collection of educationContentDerivativeSourceEducationContents.  A reference to the Education Content from which this Education Content was derived. | [optional] 
**derivative_source_learning_resource_metadata_ur_is** | [**\Swagger\Client\Model\EducationContentDerivativeSourceLearningResourceMetadataURI[]**](EducationContentDerivativeSourceLearningResourceMetadataURI.md) | An unordered collection of educationContentDerivativeSourceLearningResourceMetadataURIs.  A reference to the Learning Resource Metadata URI from which this Education Content was derived. | [optional] 
**derivative_source_ur_is** | [**\Swagger\Client\Model\EducationContentDerivativeSourceURI[]**](EducationContentDerivativeSourceURI.md) | An unordered collection of educationContentDerivativeSourceURIs.  A reference to the URI from which this Education Content was derived. | [optional] 
**languages** | [**\Swagger\Client\Model\EducationContentLanguage[]**](EducationContentLanguage.md) | An unordered collection of educationContentLanguages.  An indication of the languages in which the Education Content is designed. | [optional] 
**_etag** | **string** | A unique system-generated value that identifies the version of the resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


