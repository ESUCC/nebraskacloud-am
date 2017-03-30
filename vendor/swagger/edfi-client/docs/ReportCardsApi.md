# Swagger\Client\ReportCardsApi

All URIs are relative to *http://api.ed-fi.org/api/api/v2.0/2015*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteReportCardById**](ReportCardsApi.md#deleteReportCardById) | **DELETE** /reportCards/{id} | Deletes an existing resource using the resource identifier.
[**getReportCardByKey**](ReportCardsApi.md#getReportCardByKey) | **GET** /reportCards | Retrieves a specific resource using the values of the resource&#39;s natural key (using the \&quot;Get By Key\&quot; pattern).
[**getReportCardsById**](ReportCardsApi.md#getReportCardsById) | **GET** /reportCards/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
[**postReportCards**](ReportCardsApi.md#postReportCards) | **POST** /reportCards | Creates or updates resources based on the natural key values of the supplied resource.
[**putReportCard**](ReportCardsApi.md#putReportCard) | **PUT** /reportCards/{id} | Updates or creates a resource based on the resource identifier.


# **deleteReportCardById**
> deleteReportCardById($id, $if_match)

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ReportCardsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be deleted.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try { 
    $api_instance->deleteReportCardById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling ReportCardsApi->deleteReportCardById: ', $e->getMessage(), "\n";
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

# **getReportCardByKey**
> \Swagger\Client\Model\ReportCard getReportCardByKey($student_unique_id, $education_organization_id, $grading_period_descriptor, $grading_period_begin_date, $school_id, $if_none_match)

Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).

This GET operation provides access to resources using the \"Get by Key\" search pattern. The values of the natural key of the resource must be fully specified, and the service will return the matching result (if it exists).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ReportCardsApi();
$student_unique_id = "student_unique_id_example"; // string | A unique alpha-numeric code assigned to a student.
$education_organization_id = 56; // int | EducationOrganization Identity Column
$grading_period_descriptor = "grading_period_descriptor_example"; // string | The name of the grading period during the school year in which the grade is offered (e.g., 1st cycle, 1st semester)
$grading_period_begin_date = new \Swagger\Client\Model\Object(); // \Swagger\Client\Model\Object | Month, day, and year of the first day of the grading period.
$school_id = 56; // int | School Identity Column
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getReportCardByKey($student_unique_id, $education_organization_id, $grading_period_descriptor, $grading_period_begin_date, $school_id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportCardsApi->getReportCardByKey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **student_unique_id** | **string**| A unique alpha-numeric code assigned to a student. | 
 **education_organization_id** | [**int**](.md)| EducationOrganization Identity Column | 
 **grading_period_descriptor** | **string**| The name of the grading period during the school year in which the grade is offered (e.g., 1st cycle, 1st semester) | 
 **grading_period_begin_date** | [**\Swagger\Client\Model\Object**](.md)| Month, day, and year of the first day of the grading period. | 
 **school_id** | [**int**](.md)| School Identity Column | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\ReportCard**](ReportCard.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getReportCardsById**
> \Swagger\Client\Model\ReportCard getReportCardsById($id, $if_none_match)

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ReportCardsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be retrieved.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getReportCardsById($id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportCardsApi->getReportCardsById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be retrieved. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\ReportCard**](ReportCard.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postReportCards**
> postReportCards($report_card)

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update).  Clients should NOT include the resource \"id\" in the JSON body because it will result in an error (you must use a PUT operation to update a resource by \"id\"). The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ReportCardsApi();
$report_card = new \Swagger\Client\Model\ReportCard(); // \Swagger\Client\Model\ReportCard | The JSON representation of the \"reportCard\" resource to be created or updated.

try { 
    $api_instance->postReportCards($report_card);
} catch (Exception $e) {
    echo 'Exception when calling ReportCardsApi->postReportCards: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_card** | [**\Swagger\Client\Model\ReportCard**](\Swagger\Client\Model\ReportCard.md)| The JSON representation of the \&quot;reportCard\&quot; resource to be created or updated. | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **putReportCard**
> putReportCard($id, $report_card, $if_match)

Updates or creates a resource based on the resource identifier.

The PUT operation is used to update or create a resource by identifier.  If the resource doesn't exist, the resource will be created using that identifier.  Additionally, natural key values cannot be changed using this operation, and will not be modified in the database.  If the resource \"id\" is provided in the JSON body, it will be ignored as well.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ReportCardsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be updated.
$report_card = new \Swagger\Client\Model\ReportCard(); // \Swagger\Client\Model\ReportCard | The JSON representation of the \"reportCard\" resource to be updated.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try { 
    $api_instance->putReportCard($id, $report_card, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling ReportCardsApi->putReportCard: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be updated. | 
 **report_card** | [**\Swagger\Client\Model\ReportCard**](\Swagger\Client\Model\ReportCard.md)| The JSON representation of the \&quot;reportCard\&quot; resource to be updated. | 
 **if_match** | **string**| The ETag header value used to prevent the PUT from updating a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

