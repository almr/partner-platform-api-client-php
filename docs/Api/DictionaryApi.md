# Emesa\PartnerPlatform\DictionaryApi

All URIs are relative to *https://market.emesa.org/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listCategories**](DictionaryApi.md#listcategories) | **GET** /supplier-api/v1/categories | 
[**listShippingClasses**](DictionaryApi.md#listshippingclasses) | **GET** /supplier-api/v1/shipping-classes | 

# **listCategories**
> \Emesa\PartnerPlatform\Model\CategoryList listCategories($limit, $offset)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Emesa\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = Emesa\PartnerPlatform\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Emesa\PartnerPlatform\Api\DictionaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10000; // int | Maximum number of entities to return
$offset = 0; // int | Skip first N items

try {
    $result = $apiInstance->listCategories($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryApi->listCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum number of entities to return | [optional] [default to 10000]
 **offset** | **int**| Skip first N items | [optional] [default to 0]

### Return type

[**\Emesa\PartnerPlatform\Model\CategoryList**](../Model/CategoryList.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listShippingClasses**
> \Emesa\PartnerPlatform\Model\ShippingClassDto[] listShippingClasses()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Emesa\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = Emesa\PartnerPlatform\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Emesa\PartnerPlatform\Api\DictionaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listShippingClasses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryApi->listShippingClasses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Emesa\PartnerPlatform\Model\ShippingClassDto[]**](../Model/ShippingClassDto.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

