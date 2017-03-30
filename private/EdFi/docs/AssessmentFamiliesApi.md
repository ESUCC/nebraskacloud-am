# Swagger\Client\AssessmentFamiliesApi

All URIs are relative to *http://api.ed-fi.org/api/api/v2.0/2015*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAssessmentFamilyById**](AssessmentFamiliesApi.md#deleteAssessmentFamilyById) | **DELETE** /assessmentFamilies/{id} | Deletes an existing resource using the resource identifier.
[**getAssessmentFamiliesById**](AssessmentFamiliesApi.md#getAssessmentFamiliesById) | **GET** /assessmentFamilies/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
[**getAssessmentFamilyByKey**](AssessmentFamiliesApi.md#getAssessmentFamilyByKey) | **GET** /assessmentFamilies | Retrieves a specific resource using the values of the resource&#39;s natural key (using the \&quot;Get By Key\&quot; pattern).
[**postAssessmentFamilies**](AssessmentFamiliesApi.md#postAssessmentFamilies) | **POST** /assessmentFamilies | Creates or updates resources based on the natural key values of the supplied resource.
[**putAssessmentFamily**](AssessmentFamiliesApi.md#putAssessmentFamily) | **PUT** /assessmentFamilies/{id} | Updates or creates a resource based on the resource identifier.


# **deleteAssessmentFamilyById**
> deleteAssessmentFamilyById($id, $if_match)

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssessmentFamiliesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be deleted.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try { 
    $api_instance->deleteAssessmentFamilyById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling AssessmentFamiliesApi->deleteAssessmentFamilyById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be deleted. | 
 **if_match** | **string**| The ETag header value used to prevent the DELETE from removing a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getAssessmentFamiliesById**
> \Swagger\Client\Model\AssessmentFamily getAssessmentFamiliesById($id, $if_none_match)

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssessmentFamiliesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be retrieved.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getAssessmentFamiliesById($id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessmentFamiliesApi->getAssessmentFamiliesById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be retrieved. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\AssessmentFamily**](AssessmentFamily.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getAssessmentFamilyByKey**
> \Swagger\Client\Model\AssessmentFamily getAssessmentFamilyByKey($title, $if_none_match)

Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).

This GET operation provides access to resources using the \"Get by Key\" search pattern. The values of the natural key of the resource must be fully specified, and the service will return the matching result (if it exists).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssessmentFamiliesApi();
$title = "title_example"; // string | The title or name of the assessment family.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getAssessmentFamilyByKey($title, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessmentFamiliesApi->getAssessmentFamilyByKey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **title** | **string**| The title or name of the assessment family. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\AssessmentFamily**](AssessmentFamily.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postAssessmentFamilies**
> postAssessmentFamilies($assessment_family)

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update).  Clients should NOT include the resource \"id\" in the JSON body because it will result in an error (you must use a PUT operation to update a resource by \"id\"). The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssessmentFamiliesApi();
$assessment_family = new \Swagger\Client\Model\AssessmentFamily(); // \Swagger\Client\Model\AssessmentFamily | The JSON representation of the \"assessmentFamily\" resource to be created or updated.

try { 
    $api_instance->postAssessmentFamilies($assessment_family);
} catch (Exception $e) {
    echo 'Exception when calling AssessmentFamiliesApi->postAssessmentFamilies: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assessment_family** | [**\Swagger\Client\Model\AssessmentFamily**](\Swagger\Client\Model\AssessmentFamily.md)| The JSON representation of the \&quot;assessmentFamily\&quot; resource to be created or updated. | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **putAssessmentFamily**
> putAssessmentFamily($id, $assessment_family, $if_match)

Updates or creates a resource based on the resource identifier.

The PUT operation is used to update or create a resource by identifier.  If the resource doesn't exist, the resource will be created using that identifier.  Additionally, natural key values cannot be changed using this operation, and will not be modified in the database.  If the resource \"id\" is provided in the JSON body, it will be ignored as well.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AssessmentFamiliesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be updated.
$assessment_family = new \Swagger\Client\Model\AssessmentFamily(); // \Swagger\Client\Model\AssessmentFamily | The JSON representation of the \"assessmentFamily\" resource to be updated.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try { 
    $api_instance->putAssessmentFamily($id, $assessment_family, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling AssessmentFamiliesApi->putAssessmentFamily: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be updated. | 
 **assessment_family** | [**\Swagger\Client\Model\AssessmentFamily**](\Swagger\Client\Model\AssessmentFamily.md)| The JSON representation of the \&quot;assessmentFamily\&quot; resource to be updated. | 
 **if_match** | **string**| The ETag header value used to prevent the PUT from updating a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

