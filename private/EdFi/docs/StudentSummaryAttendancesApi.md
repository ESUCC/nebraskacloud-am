# Swagger\Client\StudentSummaryAttendancesApi

All URIs are relative to *https://sandbox.nebraskacloud.org/api/api/v1.0/2016*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteStudentSummaryAttendanceById**](StudentSummaryAttendancesApi.md#deleteStudentSummaryAttendanceById) | **DELETE** /studentSummaryAttendances/{id} | Deletes an existing resource using the resource identifier.
[**getStudentSummaryAttendanceByKey**](StudentSummaryAttendancesApi.md#getStudentSummaryAttendanceByKey) | **GET** /studentSummaryAttendances | Retrieves a specific resource using the values of the resource&#39;s natural key (using the \&quot;Get By Key\&quot; pattern).
[**getStudentSummaryAttendancesById**](StudentSummaryAttendancesApi.md#getStudentSummaryAttendancesById) | **GET** /studentSummaryAttendances/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
[**postStudentSummaryAttendances**](StudentSummaryAttendancesApi.md#postStudentSummaryAttendances) | **POST** /studentSummaryAttendances | Creates or updates resources based on the natural key values of the supplied resource.
[**putStudentSummaryAttendance**](StudentSummaryAttendancesApi.md#putStudentSummaryAttendance) | **PUT** /studentSummaryAttendances/{id} | Updates an existing resource based on the resource identifier.


# **deleteStudentSummaryAttendanceById**
> deleteStudentSummaryAttendanceById($id, $if_match)

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentSummaryAttendancesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be deleted.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try { 
    $api_instance->deleteStudentSummaryAttendanceById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentSummaryAttendancesApi->deleteStudentSummaryAttendanceById: ', $e->getMessage(), "\n";
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

# **getStudentSummaryAttendanceByKey**
> \Swagger\Client\Model\StudentSummaryAttendance getStudentSummaryAttendanceByKey($student_unique_id, $school_id, $school_year, $attendance_period_start_date, $attendance_period_end_date, $if_none_match)

Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).

This GET operation provides access to resources using the \"Get by Key\" search pattern. The values of the natural key of the resource must be fully specified, and the service will return the matching result (if it exists).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentSummaryAttendancesApi();
$student_unique_id = "student_unique_id_example"; // string | A unique alpha-numeric code assigned to a student.
$school_id = 56; // int | The school associated with the reported attendance
$school_year = 56; // int | The school year associated with the reported attendance
$attendance_period_start_date = new \DateTime(); // \DateTime | The beginning date of the Reporting Period for the aggregated attendance and enrollment information in the ISO format YYYY-MM-DD.
$attendance_period_end_date = new \DateTime(); // \DateTime | The ending date of the Reporting Period for the aggregated attendance and enrollment information in the ISO format YYYY-MM-DD
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getStudentSummaryAttendanceByKey($student_unique_id, $school_id, $school_year, $attendance_period_start_date, $attendance_period_end_date, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentSummaryAttendancesApi->getStudentSummaryAttendanceByKey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **student_unique_id** | **string**| A unique alpha-numeric code assigned to a student. | 
 **school_id** | [**int**](.md)| The school associated with the reported attendance | 
 **school_year** | [**int**](.md)| The school year associated with the reported attendance | 
 **attendance_period_start_date** | **\DateTime**| The beginning date of the Reporting Period for the aggregated attendance and enrollment information in the ISO format YYYY-MM-DD. | 
 **attendance_period_end_date** | **\DateTime**| The ending date of the Reporting Period for the aggregated attendance and enrollment information in the ISO format YYYY-MM-DD | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\StudentSummaryAttendance**](StudentSummaryAttendance.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getStudentSummaryAttendancesById**
> \Swagger\Client\Model\StudentSummaryAttendance getStudentSummaryAttendancesById($id, $if_none_match)

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentSummaryAttendancesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be retrieved.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getStudentSummaryAttendancesById($id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentSummaryAttendancesApi->getStudentSummaryAttendancesById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be retrieved. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\StudentSummaryAttendance**](StudentSummaryAttendance.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postStudentSummaryAttendances**
> postStudentSummaryAttendances($student_summary_attendance)

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this often referred to as an \"upsert\" operation (insert + update).  Clients should NOT include the resource \"id\" in the JSON body because it will result in an error (you must use a PUT operation to update a resource by \"id\"). The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentSummaryAttendancesApi();
$student_summary_attendance = new \Swagger\Client\Model\StudentSummaryAttendance(); // \Swagger\Client\Model\StudentSummaryAttendance | The JSON representation of the \"studentSummaryAttendance\" resource to be created or updated.

try { 
    $api_instance->postStudentSummaryAttendances($student_summary_attendance);
} catch (Exception $e) {
    echo 'Exception when calling StudentSummaryAttendancesApi->postStudentSummaryAttendances: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **student_summary_attendance** | [**\Swagger\Client\Model\StudentSummaryAttendance**](\Swagger\Client\Model\StudentSummaryAttendance.md)| The JSON representation of the \&quot;studentSummaryAttendance\&quot; resource to be created or updated. | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **putStudentSummaryAttendance**
> putStudentSummaryAttendance($id, $student_summary_attendance, $if_match)

Updates an existing resource based on the resource identifier.

The PUT operation is used to update an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found and will not be created).  Additionally, natural key values cannot be changed using this operation, and will be not be modified in the database.  If the resource \"id\" is provided in the JSON body, it will be ignored as well.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentSummaryAttendancesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be updated.
$student_summary_attendance = new \Swagger\Client\Model\StudentSummaryAttendance(); // \Swagger\Client\Model\StudentSummaryAttendance | The JSON representation of the \"studentSummaryAttendance\" resource to be updated.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try { 
    $api_instance->putStudentSummaryAttendance($id, $student_summary_attendance, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentSummaryAttendancesApi->putStudentSummaryAttendance: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be updated. | 
 **student_summary_attendance** | [**\Swagger\Client\Model\StudentSummaryAttendance**](\Swagger\Client\Model\StudentSummaryAttendance.md)| The JSON representation of the \&quot;studentSummaryAttendance\&quot; resource to be updated. | 
 **if_match** | **string**| The ETag header value used to prevent the PUT from updating a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

