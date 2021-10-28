# Emesa\PartnerPlatform\ProductsApi

All URIs are relative to *https://selp469.test.market.emesa.org/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOffer**](ProductsApi.md#getoffer) | **GET** /supplier-api/v1/products/{id}/offer | 
[**getProduct**](ProductsApi.md#getproduct) | **GET** /supplier-api/v1/products/{id} | 
[**listProducts**](ProductsApi.md#listproducts) | **GET** /supplier-api/v1/products | 
[**putOffer**](ProductsApi.md#putoffer) | **PUT** /supplier-api/v1/products/{id}/offer | 
[**putProduct**](ProductsApi.md#putproduct) | **PUT** /supplier-api/v1/products/{id} | 

# **getOffer**
> \Emesa\PartnerPlatform\Model\ProductOfferDto getOffer($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Emesa\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = Emesa\PartnerPlatform\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Emesa\PartnerPlatform\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getOffer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Emesa\PartnerPlatform\Model\ProductOfferDto**](../Model/ProductOfferDto.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProduct**
> \Emesa\PartnerPlatform\Model\ProductDto getProduct($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Emesa\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = Emesa\PartnerPlatform\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Emesa\PartnerPlatform\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getProduct($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Emesa\PartnerPlatform\Model\ProductDto**](../Model/ProductDto.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listProducts**
> \Emesa\PartnerPlatform\Model\ProductList listProducts($limit, $offset)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Emesa\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = Emesa\PartnerPlatform\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Emesa\PartnerPlatform\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1000; // int | Maximum number of entities to return
$offset = 56; // int | Skip first N items

try {
    $result = $apiInstance->listProducts($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->listProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum number of entities to return | [optional] [default to 1000]
 **offset** | **int**| Skip first N items | [optional]

### Return type

[**\Emesa\PartnerPlatform\Model\ProductList**](../Model/ProductList.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOffer**
> putOffer($id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Emesa\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = Emesa\PartnerPlatform\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Emesa\PartnerPlatform\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \Emesa\PartnerPlatform\Model\PutOfferRequest(); // \Emesa\PartnerPlatform\Model\PutOfferRequest | Input data

try {
    $apiInstance->putOffer($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->putOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\Emesa\PartnerPlatform\Model\PutOfferRequest**](../Model/PutOfferRequest.md)| Input data | [optional]

### Return type

void (empty response body)

### Authorization

[BearerToken](../../README.md#BearerToken), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putProduct**
> putProduct($id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Emesa\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = Emesa\PartnerPlatform\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Emesa\PartnerPlatform\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \Emesa\PartnerPlatform\Model\PutProductRequest(); // \Emesa\PartnerPlatform\Model\PutProductRequest | Input data

try {
    $apiInstance->putProduct($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->putProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\Emesa\PartnerPlatform\Model\PutProductRequest**](../Model/PutProductRequest.md)| Input data | [optional]

### Return type

void (empty response body)

### Authorization

[BearerToken](../../README.md#BearerToken), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

