# Swagger\Client\IdentitiesApi

All URIs are relative to *https://sandbox.nebraskacloud.org/api/api/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getByExample**](IdentitiesApi.md#getByExample) | **GET** /identities | Lookup an existing Unique Id for a person, or suggest possible matches.
[**getById**](IdentitiesApi.md#getById) | **GET** /identities/{id} | Retrieve a single person record from their Unique Id.
[**post**](IdentitiesApi.md#post) | **POST** /identities | Creates a new Unique Id for the given Identity information. Assumption here is that the user has verified that possible matches are not correct matches.


# **getByExample**
> \Swagger\Client\Model\IdentityResource getByExample($birth_gender, $birth_date, $family_names, $given_names)

Lookup an existing Unique Id for a person, or suggest possible matches.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\IdentitiesApi();
$birth_gender = "birth_gender_example"; // string | Gender of the identity
$birth_date = "birth_date_example"; // string | Birthdate of the identity
$family_names = "family_names_example"; // string | Family names of the identity
$given_names = "given_names_example"; // string | Given names of the identity

try { 
    $result = $api_instance->getByExample($birth_gender, $birth_date, $family_names, $given_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentitiesApi->getByExample: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **birth_gender** | **string**| Gender of the identity | [optional] 
 **birth_date** | **string**| Birthdate of the identity | [optional] 
 **family_names** | **string**| Family names of the identity | [optional] 
 **given_names** | **string**| Given names of the identity | [optional] 

### Return type

[**\Swagger\Client\Model\IdentityResource**](IdentityResource.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getById**
> \Swagger\Client\Model\IdentityResource getById($id)

Retrieve a single person record from their Unique Id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\IdentitiesApi();
$id = "id_example"; // string | Unique Id of the person to be retrieved

try { 
    $result = $api_instance->getById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentitiesApi->getById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique Id of the person to be retrieved | 

### Return type

[**\Swagger\Client\Model\IdentityResource**](IdentityResource.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **post**
> \Swagger\Client\Model\IdentityResource post($request)

Creates a new Unique Id for the given Identity information. Assumption here is that the user has verified that possible matches are not correct matches.

A new identifier will be created

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\IdentitiesApi();
$request = new \Swagger\Client\Model\IdentityResource(); // \Swagger\Client\Model\IdentityResource | Identity object to be created

try { 
    $result = $api_instance->post($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentitiesApi->post: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\IdentityResource**](\Swagger\Client\Model\IdentityResource.md)| Identity object to be created | 

### Return type

[**\Swagger\Client\Model\IdentityResource**](IdentityResource.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

