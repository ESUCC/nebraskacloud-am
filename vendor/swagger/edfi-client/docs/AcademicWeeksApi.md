# Swagger\Client\AcademicWeeksApi

All URIs are relative to *http://api.ed-fi.org/api/api/v2.0/2015*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAcademicWeekById**](AcademicWeeksApi.md#deleteAcademicWeekById) | **DELETE** /academicWeeks/{id} | Deletes an existing resource using the resource identifier.
[**getAcademicWeekByKey**](AcademicWeeksApi.md#getAcademicWeekByKey) | **GET** /academicWeeks | Retrieves a specific resource using the values of the resource&#39;s natural key (using the \&quot;Get By Key\&quot; pattern).
[**getAcademicWeeksById**](AcademicWeeksApi.md#getAcademicWeeksById) | **GET** /academicWeeks/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
[**postAcademicWeeks**](AcademicWeeksApi.md#postAcademicWeeks) | **POST** /academicWeeks | Creates or updates resources based on the natural key values of the supplied resource.
[**putAcademicWeek**](AcademicWeeksApi.md#putAcademicWeek) | **PUT** /academicWeeks/{id} | Updates or creates a resource based on the resource identifier.


# **deleteAcademicWeekById**
> deleteAcademicWeekById($id, $if_match)

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AcademicWeeksApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be deleted.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try { 
    $api_instance->deleteAcademicWeekById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling AcademicWeeksApi->deleteAcademicWeekById: ', $e->getMessage(), "\n";
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

# **getAcademicWeekByKey**
> \Swagger\Client\Model\AcademicWeek getAcademicWeekByKey($week_identifier, $school_id, $if_none_match)

Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).

This GET operation provides access to resources using the \"Get by Key\" search pattern. The values of the natural key of the resource must be fully specified, and the service will return the matching result (if it exists).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AcademicWeeksApi();
$week_identifier = "week_identifier_example"; // string | The school label for the academic week.
$school_id = 56; // int | The identifier assigned to a school by the State Education Agency (SEA).
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getAcademicWeekByKey($week_identifier, $school_id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcademicWeeksApi->getAcademicWeekByKey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **week_identifier** | **string**| The school label for the academic week. | 
 **school_id** | [**int**](.md)| The identifier assigned to a school by the State Education Agency (SEA). | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\AcademicWeek**](AcademicWeek.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getAcademicWeeksById**
> \Swagger\Client\Model\AcademicWeek getAcademicWeeksById($id, $if_none_match)

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AcademicWeeksApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be retrieved.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getAcademicWeeksById($id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcademicWeeksApi->getAcademicWeeksById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be retrieved. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\AcademicWeek**](AcademicWeek.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postAcademicWeeks**
> postAcademicWeeks($academic_week)

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update).  Clients should NOT include the resource \"id\" in the JSON body because it will result in an error (you must use a PUT operation to update a resource by \"id\"). The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AcademicWeeksApi();
$academic_week = new \Swagger\Client\Model\AcademicWeek(); // \Swagger\Client\Model\AcademicWeek | The JSON representation of the \"academicWeek\" resource to be created or updated.

try { 
    $api_instance->postAcademicWeeks($academic_week);
} catch (Exception $e) {
    echo 'Exception when calling AcademicWeeksApi->postAcademicWeeks: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **academic_week** | [**\Swagger\Client\Model\AcademicWeek**](\Swagger\Client\Model\AcademicWeek.md)| The JSON representation of the \&quot;academicWeek\&quot; resource to be created or updated. | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **putAcademicWeek**
> putAcademicWeek($id, $academic_week, $if_match)

Updates or creates a resource based on the resource identifier.

The PUT operation is used to update or create a resource by identifier.  If the resource doesn't exist, the resource will be created using that identifier.  Additionally, natural key values cannot be changed using this operation, and will not be modified in the database.  If the resource \"id\" is provided in the JSON body, it will be ignored as well.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AcademicWeeksApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be updated.
$academic_week = new \Swagger\Client\Model\AcademicWeek(); // \Swagger\Client\Model\AcademicWeek | The JSON representation of the \"academicWeek\" resource to be updated.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try { 
    $api_instance->putAcademicWeek($id, $academic_week, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling AcademicWeeksApi->putAcademicWeek: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be updated. | 
 **academic_week** | [**\Swagger\Client\Model\AcademicWeek**](\Swagger\Client\Model\AcademicWeek.md)| The JSON representation of the \&quot;academicWeek\&quot; resource to be updated. | 
 **if_match** | **string**| The ETag header value used to prevent the PUT from updating a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

