# Swagger\Client\StudentGradebookEntriesApi

All URIs are relative to *http://api.ed-fi.org/api/api/v2.0/2015*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteStudentGradebookEntryById**](StudentGradebookEntriesApi.md#deleteStudentGradebookEntryById) | **DELETE** /studentGradebookEntries/{id} | Deletes an existing resource using the resource identifier.
[**getStudentGradebookEntriesById**](StudentGradebookEntriesApi.md#getStudentGradebookEntriesById) | **GET** /studentGradebookEntries/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
[**getStudentGradebookEntryByKey**](StudentGradebookEntriesApi.md#getStudentGradebookEntryByKey) | **GET** /studentGradebookEntries | Retrieves a specific resource using the values of the resource&#39;s natural key (using the \&quot;Get By Key\&quot; pattern).
[**postStudentGradebookEntries**](StudentGradebookEntriesApi.md#postStudentGradebookEntries) | **POST** /studentGradebookEntries | Creates or updates resources based on the natural key values of the supplied resource.
[**putStudentGradebookEntry**](StudentGradebookEntriesApi.md#putStudentGradebookEntry) | **PUT** /studentGradebookEntries/{id} | Updates or creates a resource based on the resource identifier.


# **deleteStudentGradebookEntryById**
> deleteStudentGradebookEntryById($id, $if_match)

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentGradebookEntriesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be deleted.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try { 
    $api_instance->deleteStudentGradebookEntryById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentGradebookEntriesApi->deleteStudentGradebookEntryById: ', $e->getMessage(), "\n";
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

# **getStudentGradebookEntriesById**
> \Swagger\Client\Model\StudentGradebookEntry getStudentGradebookEntriesById($id, $if_none_match)

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentGradebookEntriesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be retrieved.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getStudentGradebookEntriesById($id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentGradebookEntriesApi->getStudentGradebookEntriesById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be retrieved. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\StudentGradebookEntry**](StudentGradebookEntry.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getStudentGradebookEntryByKey**
> \Swagger\Client\Model\StudentGradebookEntry getStudentGradebookEntryByKey($student_unique_id, $classroom_identification_code, $school_id, $class_period_name, $local_course_code, $school_year, $term_descriptor, $unique_section_code, $sequence_of_course, $begin_date, $gradebook_entry_title, $date_assigned, $if_none_match)

Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).

This GET operation provides access to resources using the \"Get by Key\" search pattern. The values of the natural key of the resource must be fully specified, and the service will return the matching result (if it exists).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentGradebookEntriesApi();
$student_unique_id = "student_unique_id_example"; // string | A unique alpha-numeric code assigned to a student.
$classroom_identification_code = "classroom_identification_code_example"; // string | A unique number or alphanumeric code assigned to a room by a school, school system, state, or other agency or entity.
$school_id = 56; // int | School Identity Column
$class_period_name = "class_period_name_example"; // string | An indication of the portion of a typical daily session in which students receive instruction in a specified subject (e.g., morning, sixth period, block period, or AB schedules).   NEDM: Class Period
$local_course_code = "local_course_code_example"; // string | The local code assigned by the School that identifies the course offering provided for the instruction of students.
$school_year = 56; // int | The identifier for the school year.
$term_descriptor = "term_descriptor_example"; // string | A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table.
$unique_section_code = "unique_section_code_example"; // string | A unique identifier for the Section that is defined by the classroom, the subjects taught, and the instructors that are assigned.
$sequence_of_course = 56; // int | When a Section is part of a sequence of parts for a course, the number of the sequence.
$begin_date = new \Swagger\Client\Model\Object(); // \Swagger\Client\Model\Object | Month, day and year of the student''s entry or assignment to the section.  If blank, default is the start date of the first grading period.  NEDM: EntryDate
$gradebook_entry_title = "gradebook_entry_title_example"; // string | The name or title of the activity to be recorded in the gradebook entry.
$date_assigned = new \Swagger\Client\Model\Object(); // \Swagger\Client\Model\Object | The date the assignment, homework, or assessment was assigned or executed.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getStudentGradebookEntryByKey($student_unique_id, $classroom_identification_code, $school_id, $class_period_name, $local_course_code, $school_year, $term_descriptor, $unique_section_code, $sequence_of_course, $begin_date, $gradebook_entry_title, $date_assigned, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentGradebookEntriesApi->getStudentGradebookEntryByKey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **student_unique_id** | **string**| A unique alpha-numeric code assigned to a student. | 
 **classroom_identification_code** | **string**| A unique number or alphanumeric code assigned to a room by a school, school system, state, or other agency or entity. | 
 **school_id** | [**int**](.md)| School Identity Column | 
 **class_period_name** | **string**| An indication of the portion of a typical daily session in which students receive instruction in a specified subject (e.g., morning, sixth period, block period, or AB schedules).   NEDM: Class Period | 
 **local_course_code** | **string**| The local code assigned by the School that identifies the course offering provided for the instruction of students. | 
 **school_year** | [**int**](.md)| The identifier for the school year. | 
 **term_descriptor** | **string**| A unique identifier used as Primary Key, not derived from business logic, when acting as Foreign Key, references the parent table. | 
 **unique_section_code** | **string**| A unique identifier for the Section that is defined by the classroom, the subjects taught, and the instructors that are assigned. | 
 **sequence_of_course** | [**int**](.md)| When a Section is part of a sequence of parts for a course, the number of the sequence. | 
 **begin_date** | [**\Swagger\Client\Model\Object**](.md)| Month, day and year of the student&#39;&#39;s entry or assignment to the section.  If blank, default is the start date of the first grading period.  NEDM: EntryDate | 
 **gradebook_entry_title** | **string**| The name or title of the activity to be recorded in the gradebook entry. | 
 **date_assigned** | [**\Swagger\Client\Model\Object**](.md)| The date the assignment, homework, or assessment was assigned or executed. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\StudentGradebookEntry**](StudentGradebookEntry.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postStudentGradebookEntries**
> postStudentGradebookEntries($student_gradebook_entry)

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update).  Clients should NOT include the resource \"id\" in the JSON body because it will result in an error (you must use a PUT operation to update a resource by \"id\"). The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentGradebookEntriesApi();
$student_gradebook_entry = new \Swagger\Client\Model\StudentGradebookEntry(); // \Swagger\Client\Model\StudentGradebookEntry | The JSON representation of the \"studentGradebookEntry\" resource to be created or updated.

try { 
    $api_instance->postStudentGradebookEntries($student_gradebook_entry);
} catch (Exception $e) {
    echo 'Exception when calling StudentGradebookEntriesApi->postStudentGradebookEntries: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **student_gradebook_entry** | [**\Swagger\Client\Model\StudentGradebookEntry**](\Swagger\Client\Model\StudentGradebookEntry.md)| The JSON representation of the \&quot;studentGradebookEntry\&quot; resource to be created or updated. | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **putStudentGradebookEntry**
> putStudentGradebookEntry($id, $student_gradebook_entry, $if_match)

Updates or creates a resource based on the resource identifier.

The PUT operation is used to update or create a resource by identifier.  If the resource doesn't exist, the resource will be created using that identifier.  Additionally, natural key values cannot be changed using this operation, and will not be modified in the database.  If the resource \"id\" is provided in the JSON body, it will be ignored as well.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StudentGradebookEntriesApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be updated.
$student_gradebook_entry = new \Swagger\Client\Model\StudentGradebookEntry(); // \Swagger\Client\Model\StudentGradebookEntry | The JSON representation of the \"studentGradebookEntry\" resource to be updated.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try { 
    $api_instance->putStudentGradebookEntry($id, $student_gradebook_entry, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling StudentGradebookEntriesApi->putStudentGradebookEntry: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be updated. | 
 **student_gradebook_entry** | [**\Swagger\Client\Model\StudentGradebookEntry**](\Swagger\Client\Model\StudentGradebookEntry.md)| The JSON representation of the \&quot;studentGradebookEntry\&quot; resource to be updated. | 
 **if_match** | **string**| The ETag header value used to prevent the PUT from updating a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

