# Swagger\Client\ContractedStaffsApi

All URIs are relative to *http://api.ed-fi.org/api/api/v2.0/2015*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteContractedStaffById**](ContractedStaffsApi.md#deleteContractedStaffById) | **DELETE** /contractedStaffs/{id} | Deletes an existing resource using the resource identifier.
[**getContractedStaffByKey**](ContractedStaffsApi.md#getContractedStaffByKey) | **GET** /contractedStaffs | Retrieves a specific resource using the values of the resource&#39;s natural key (using the \&quot;Get By Key\&quot; pattern).
[**getContractedStaffsById**](ContractedStaffsApi.md#getContractedStaffsById) | **GET** /contractedStaffs/{id} | Retrieves a specific resource using the resource&#39;s identifier (using the \&quot;Get By Id\&quot; pattern).
[**postContractedStaffs**](ContractedStaffsApi.md#postContractedStaffs) | **POST** /contractedStaffs | Creates or updates resources based on the natural key values of the supplied resource.
[**putContractedStaff**](ContractedStaffsApi.md#putContractedStaff) | **PUT** /contractedStaffs/{id} | Updates or creates a resource based on the resource identifier.


# **deleteContractedStaffById**
> deleteContractedStaffById($id, $if_match)

Deletes an existing resource using the resource identifier.

The DELETE operation is used to delete an existing resource by identifier.  If the resource doesn't exist, an error will result (the resource will not be found).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContractedStaffsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be deleted.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the DELETE from removing a resource modified by another consumer.

try { 
    $api_instance->deleteContractedStaffById($id, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling ContractedStaffsApi->deleteContractedStaffById: ', $e->getMessage(), "\n";
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

# **getContractedStaffByKey**
> \Swagger\Client\Model\ContractedStaff getContractedStaffByKey($staff_unique_id, $education_organization_id, $account_number, $fiscal_year, $as_of_date, $if_none_match)

Retrieves a specific resource using the values of the resource's natural key (using the \"Get By Key\" pattern).

This GET operation provides access to resources using the \"Get by Key\" search pattern. The values of the natural key of the resource must be fully specified, and the service will return the matching result (if it exists).

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContractedStaffsApi();
$staff_unique_id = "staff_unique_id_example"; // string | A unique alpha-numeric code assigned to a staff.
$education_organization_id = 56; // int | EducationOrganization Identity Column
$account_number = "account_number_example"; // string | Account with which the Contracted Staff expense is associated.
$fiscal_year = 56; // int | The financial accounting year.  NEDM: Fiscal Year
$as_of_date = new \Swagger\Client\Model\Object(); // \Swagger\Client\Model\Object | The date of the reported contracted staff element.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getContractedStaffByKey($staff_unique_id, $education_organization_id, $account_number, $fiscal_year, $as_of_date, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractedStaffsApi->getContractedStaffByKey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **staff_unique_id** | **string**| A unique alpha-numeric code assigned to a staff. | 
 **education_organization_id** | [**int**](.md)| EducationOrganization Identity Column | 
 **account_number** | **string**| Account with which the Contracted Staff expense is associated. | 
 **fiscal_year** | [**int**](.md)| The financial accounting year.  NEDM: Fiscal Year | 
 **as_of_date** | [**\Swagger\Client\Model\Object**](.md)| The date of the reported contracted staff element. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\ContractedStaff**](ContractedStaff.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getContractedStaffsById**
> \Swagger\Client\Model\ContractedStaff getContractedStaffsById($id, $if_none_match)

Retrieves a specific resource using the resource's identifier (using the \"Get By Id\" pattern).

This GET operation retrieves a resource by the specified resource identifier.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContractedStaffsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be retrieved.
$if_none_match = "if_none_match_example"; // string | The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource.

try { 
    $result = $api_instance->getContractedStaffsById($id, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractedStaffsApi->getContractedStaffsById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be retrieved. | 
 **if_none_match** | **string**| The previously returned ETag header value, used here to prevent the unnecessary data transfer of an unchanged resource. | [optional] 

### Return type

[**\Swagger\Client\Model\ContractedStaff**](ContractedStaff.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postContractedStaffs**
> postContractedStaffs($contracted_staff)

Creates or updates resources based on the natural key values of the supplied resource.

The POST operation can be used to create or update resources. In database terms, this is often referred to as an \"upsert\" operation (insert + update).  Clients should NOT include the resource \"id\" in the JSON body because it will result in an error (you must use a PUT operation to update a resource by \"id\"). The web service will identify whether the resource already exists based on the natural key values provided, and update or create the resource appropriately.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContractedStaffsApi();
$contracted_staff = new \Swagger\Client\Model\ContractedStaff(); // \Swagger\Client\Model\ContractedStaff | The JSON representation of the \"contractedStaff\" resource to be created or updated.

try { 
    $api_instance->postContractedStaffs($contracted_staff);
} catch (Exception $e) {
    echo 'Exception when calling ContractedStaffsApi->postContractedStaffs: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contracted_staff** | [**\Swagger\Client\Model\ContractedStaff**](\Swagger\Client\Model\ContractedStaff.md)| The JSON representation of the \&quot;contractedStaff\&quot; resource to be created or updated. | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **putContractedStaff**
> putContractedStaff($id, $contracted_staff, $if_match)

Updates or creates a resource based on the resource identifier.

The PUT operation is used to update or create a resource by identifier.  If the resource doesn't exist, the resource will be created using that identifier.  Additionally, natural key values cannot be changed using this operation, and will not be modified in the database.  If the resource \"id\" is provided in the JSON body, it will be ignored as well.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContractedStaffsApi();
$id = "id_example"; // string | A resource identifier specifying the resource to be updated.
$contracted_staff = new \Swagger\Client\Model\ContractedStaff(); // \Swagger\Client\Model\ContractedStaff | The JSON representation of the \"contractedStaff\" resource to be updated.
$if_match = "if_match_example"; // string | The ETag header value used to prevent the PUT from updating a resource modified by another consumer.

try { 
    $api_instance->putContractedStaff($id, $contracted_staff, $if_match);
} catch (Exception $e) {
    echo 'Exception when calling ContractedStaffsApi->putContractedStaff: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| A resource identifier specifying the resource to be updated. | 
 **contracted_staff** | [**\Swagger\Client\Model\ContractedStaff**](\Swagger\Client\Model\ContractedStaff.md)| The JSON representation of the \&quot;contractedStaff\&quot; resource to be updated. | 
 **if_match** | **string**| The ETag header value used to prevent the PUT from updating a resource modified by another consumer. | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

