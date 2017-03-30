# Swagger\Client\SectionAttendanceTakenEventsApi

All URIs are relative to *http://api.ed-fi.org/api/api/v2.0/2015*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSectionAttendanceTakenEventById**](SectionAttendanceTakenEventsApi.md#deleteSectionAttendanceTakenEventById) | **DELETE** /sectionAttendanceTakenEvents/{id} | Deletes an existing resource using the resource identifier.
[**getSectionAttendanceTakenEventByKey**](SectionAttendanceTakenEventsApi.md#getSectionAttendanceTakenEventByKey) | **GET** /sectionAttendanceTakenEvents | Retrieves a specific resource using the values of the resource&#39;s natural key (using the \&quot;Get By Key\&quot; pattern).
[**getSectionAttendanceTakenEventsById**](SectionAttendanceTakenEventsApi.md#getSectionAttendanceTakenEventsById) | **GET** /sectionAttendanceTakenEvents/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
[**postSectionAttendanceTakenEvents**](SectionAttendanceTakenEventsApi.md#postSectionAttendanceTakenEvents) | **POST** /sectionAttendanceTakenEvents | Creates or updates resources based on the natural key values of the supplied resource.
[**putSectionAttendanceTakenEvent**](SectionAttendanceTakenEventsApi.md#putSectionAttendanceTakenEvent) | **PUT** /sectionAttendanceTakenEvents/{id} | Updates or creates a resource based on the resource identifier.


# **deleteSectionAttendanceTakenEventById**
> deleteSectionAttendanceTakenEventById($id, $if_match)

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SectionAttendanceTakenEventsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be deleted.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try { 
    $api_instance->deleteSectionAttendanceTakenEventById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling SectionAttendanceTakenEventsApi->deleteSectionAttendanceTakenEventById: ', $e->getMessage(), "\n";
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

# **getSectionAttendanceTakenEventByKey**
> \Swagger\Client\Model\SectionAttendanceTakenEvent getSectionAttendanceTakenEventByKey($school_id, $class_period_name, $classroom_identification_code, $local_course_code, $term_descriptor, $school_year, $unique_section_code, $sequence_of_course, $date, $if_none_match)

Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).

This GET operation provides access to resources using the \"Get by Key\" search pattern. The values of the natural key of the resource must be fully specified, and the service will return the matching result (if it exists).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SectionAttendanceTakenEventsApi();
$school_id = 56; // int | School Identity Column
$class_period_name = "class_period_name_example"; // string | An indication of the portion of a typical daily session in which students receive instruction in a specified subject (e.g., morning, sixth period, block period, or AB schedules).   NEDM: Class Period
$classroom_identification_code = "classroom_identification_code_example"; // string | A unique number or alphanumeric code assigned to a room by a school, school system, state, or other agency or entity.
$local_course_code = "local_course_code_example"; // string | The local code assigned by the LEA or Campus that identifies the organization of subject matter and related learning experiences provided for the instruction of students.
$term_descriptor = "term_descriptor_example"; // string | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
$school_year = 56; // int | The identifier for the school year.
$unique_section_code = "unique_section_code_example"; // string | A unique identifier for the Section, that is defined by the classroom, the subjects taught, and the instructors that are assigned.
$sequence_of_course = 56; // int | When a Section is part of a sequence of parts for a course, the number if the sequence. If the course has only one part, the value of this Section attribute should be 1.
$date = new \Swagger\Client\Model\Object(); // \Swagger\Client\Model\Object | The month, day, and year of the CalendarDate.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getSectionAttendanceTakenEventByKey($school_id, $class_period_name, $classroom_identification_code, $local_course_code, $term_descriptor, $school_year, $unique_section_code, $sequence_of_course, $date, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SectionAttendanceTakenEventsApi->getSectionAttendanceTakenEventByKey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **school_id** | [**int**](.md)| School Identity Column | 
 **class_period_name** | **string**| An indication of the portion of a typical daily session in which students receive instruction in a specified subject (e.g., morning, sixth period, block period, or AB schedules).   NEDM: Class Period | 
 **classroom_identification_code** | **string**| A unique number or alphanumeric code assigned to a room by a school, school system, state, or other agency or entity. | 
 **local_course_code** | **string**| The local code assigned by the LEA or Campus that identifies the organization of subject matter and related learning experiences provided for the instruction of students. | 
 **term_descriptor** | **string**| A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | 
 **school_year** | [**int**](.md)| The identifier for the school year. | 
 **unique_section_code** | **string**| A unique identifier for the Section, that is defined by the classroom, the subjects taught, and the instructors that are assigned. | 
 **sequence_of_course** | [**int**](.md)| When a Section is part of a sequence of parts for a course, the number if the sequence. If the course has only one part, the value of this Section attribute should be 1. | 
 **date** | [**\Swagger\Client\Model\Object**](.md)| The month, day, and year of the CalendarDate. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\SectionAttendanceTakenEvent**](SectionAttendanceTakenEvent.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSectionAttendanceTakenEventsById**
> \Swagger\Client\Model\SectionAttendanceTakenEvent getSectionAttendanceTakenEventsById($id, $if_none_match)

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SectionAttendanceTakenEventsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be retrieved.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getSectionAttendanceTakenEventsById($id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SectionAttendanceTakenEventsApi->getSectionAttendanceTakenEventsById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be retrieved. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\SectionAttendanceTakenEvent**](SectionAttendanceTakenEvent.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postSectionAttendanceTakenEvents**
> postSectionAttendanceTakenEvents($section_attendance_taken_event)

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update).  Clients should NOT include the resource \"id\" in the JSON body because it will result in an error (you must use a PUT operation to update a resource by \"id\"). The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SectionAttendanceTakenEventsApi();
$section_attendance_taken_event = new \Swagger\Client\Model\SectionAttendanceTakenEvent(); // \Swagger\Client\Model\SectionAttendanceTakenEvent | The JSON representation of the \"sectionAttendanceTakenEvent\" resource to be created or updated.

try { 
    $api_instance->postSectionAttendanceTakenEvents($section_attendance_taken_event);
} catch (Exception $e) {
    echo 'Exception when calling SectionAttendanceTakenEventsApi->postSectionAttendanceTakenEvents: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **section_attendance_taken_event** | [**\Swagger\Client\Model\SectionAttendanceTakenEvent**](\Swagger\Client\Model\SectionAttendanceTakenEvent.md)| The JSON representation of the \&quot;sectionAttendanceTakenEvent\&quot; resource to be created or updated. | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **putSectionAttendanceTakenEvent**
> putSectionAttendanceTakenEvent($id, $section_attendance_taken_event, $if_match)

Updates or creates a resource based on the resource identifier.

The PUT operation is used to update or create a resource by identifier.  If the resource doesn't exist, the resource will be created using that identifier.  Additionally, natural key values cannot be changed using this operation, and will not be modified in the database.  If the resource \"id\" is provided in the JSON body, it will be ignored as well.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SectionAttendanceTakenEventsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be updated.
$section_attendance_taken_event = new \Swagger\Client\Model\SectionAttendanceTakenEvent(); // \Swagger\Client\Model\SectionAttendanceTakenEvent | The JSON representation of the \"sectionAttendanceTakenEvent\" resource to be updated.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try { 
    $api_instance->putSectionAttendanceTakenEvent($id, $section_attendance_taken_event, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling SectionAttendanceTakenEventsApi->putSectionAttendanceTakenEvent: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be updated. | 
 **section_attendance_taken_event** | [**\Swagger\Client\Model\SectionAttendanceTakenEvent**](\Swagger\Client\Model\SectionAttendanceTakenEvent.md)| The JSON representation of the \&quot;sectionAttendanceTakenEvent\&quot; resource to be updated. | 
 **if_match** | **string**| The ETag header value used to prevent the PUT from updating a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

