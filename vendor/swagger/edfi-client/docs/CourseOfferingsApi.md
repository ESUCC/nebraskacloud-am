# Swagger\Client\CourseOfferingsApi

All URIs are relative to *http://api.ed-fi.org/api/api/v2.0/2015*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCourseOfferingById**](CourseOfferingsApi.md#deleteCourseOfferingById) | **DELETE** /courseOfferings/{id} | Deletes an existing resource using the resource identifier.
[**getCourseOfferingByKey**](CourseOfferingsApi.md#getCourseOfferingByKey) | **GET** /courseOfferings | Retrieves a specific resource using the values of the resource&#39;s natural key (using the \&quot;Get By Key\&quot; pattern).
[**getCourseOfferingsById**](CourseOfferingsApi.md#getCourseOfferingsById) | **GET** /courseOfferings/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
[**postCourseOfferings**](CourseOfferingsApi.md#postCourseOfferings) | **POST** /courseOfferings | Creates or updates resources based on the natural key values of the supplied resource.
[**putCourseOffering**](CourseOfferingsApi.md#putCourseOffering) | **PUT** /courseOfferings/{id} | Updates or creates a resource based on the resource identifier.


# **deleteCourseOfferingById**
> deleteCourseOfferingById($id, $if_match)

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CourseOfferingsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be deleted.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try { 
    $api_instance->deleteCourseOfferingById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling CourseOfferingsApi->deleteCourseOfferingById: ', $e->getMessage(), "\n";
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

# **getCourseOfferingByKey**
> \Swagger\Client\Model\CourseOffering getCourseOfferingByKey($local_course_code, $school_id, $school_year, $term_descriptor, $if_none_match)

Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).

This GET operation provides access to resources using the \"Get by Key\" search pattern. The values of the natural key of the resource must be fully specified, and the service will return the matching result (if it exists).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CourseOfferingsApi();
$local_course_code = "local_course_code_example"; // string | The local code assigned by the LEA that identifies the organization of subject matter and related learning experiences provided for the instruction of students.
$school_id = 56; // int | School Identity Column  
$school_year = 56; // int | The identifier for the school year.
$term_descriptor = "term_descriptor_example"; // string | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getCourseOfferingByKey($local_course_code, $school_id, $school_year, $term_descriptor, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseOfferingsApi->getCourseOfferingByKey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **local_course_code** | **string**| The local code assigned by the LEA that identifies the organization of subject matter and related learning experiences provided for the instruction of students. | 
 **school_id** | [**int**](.md)| School Identity Column   | 
 **school_year** | [**int**](.md)| The identifier for the school year. | 
 **term_descriptor** | **string**| A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\CourseOffering**](CourseOffering.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCourseOfferingsById**
> \Swagger\Client\Model\CourseOffering getCourseOfferingsById($id, $if_none_match)

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CourseOfferingsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be retrieved.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getCourseOfferingsById($id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseOfferingsApi->getCourseOfferingsById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be retrieved. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\CourseOffering**](CourseOffering.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postCourseOfferings**
> postCourseOfferings($course_offering)

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update).  Clients should NOT include the resource \"id\" in the JSON body because it will result in an error (you must use a PUT operation to update a resource by \"id\"). The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CourseOfferingsApi();
$course_offering = new \Swagger\Client\Model\CourseOffering(); // \Swagger\Client\Model\CourseOffering | The JSON representation of the \"courseOffering\" resource to be created or updated.

try { 
    $api_instance->postCourseOfferings($course_offering);
} catch (Exception $e) {
    echo 'Exception when calling CourseOfferingsApi->postCourseOfferings: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_offering** | [**\Swagger\Client\Model\CourseOffering**](\Swagger\Client\Model\CourseOffering.md)| The JSON representation of the \&quot;courseOffering\&quot; resource to be created or updated. | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **putCourseOffering**
> putCourseOffering($id, $course_offering, $if_match)

Updates or creates a resource based on the resource identifier.

The PUT operation is used to update or create a resource by identifier.  If the resource doesn't exist, the resource will be created using that identifier.  Additionally, natural key values cannot be changed using this operation, and will not be modified in the database.  If the resource \"id\" is provided in the JSON body, it will be ignored as well.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CourseOfferingsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be updated.
$course_offering = new \Swagger\Client\Model\CourseOffering(); // \Swagger\Client\Model\CourseOffering | The JSON representation of the \"courseOffering\" resource to be updated.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try { 
    $api_instance->putCourseOffering($id, $course_offering, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling CourseOfferingsApi->putCourseOffering: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be updated. | 
 **course_offering** | [**\Swagger\Client\Model\CourseOffering**](\Swagger\Client\Model\CourseOffering.md)| The JSON representation of the \&quot;courseOffering\&quot; resource to be updated. | 
 **if_match** | **string**| The ETag header value used to prevent the PUT from updating a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

