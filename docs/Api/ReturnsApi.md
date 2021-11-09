# Emesa\PartnerPlatform\ReturnsApi

All URIs are relative to *https://market.emesa.org/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listReturns**](ReturnsApi.md#listreturns) | **GET** /supplier-api/v1/orders/{marketOrderId}/returns | 
[**putReturn**](ReturnsApi.md#putreturn) | **PUT** /supplier-api/v1/orders/{marketOrderId}/returns/{supplierReturnId} | 

# **listReturns**
> \Emesa\PartnerPlatform\Model\ReturnDto[] listReturns($market_order_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Emesa\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = Emesa\PartnerPlatform\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Emesa\PartnerPlatform\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$market_order_id = "market_order_id_example"; // string | 

try {
    $result = $apiInstance->listReturns($market_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->listReturns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **market_order_id** | **string**|  |

### Return type

[**\Emesa\PartnerPlatform\Model\ReturnDto[]**](../Model/ReturnDto.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putReturn**
> putReturn($market_order_id, $supplier_return_id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Emesa\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = Emesa\PartnerPlatform\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Emesa\PartnerPlatform\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$market_order_id = "market_order_id_example"; // string | 
$supplier_return_id = "supplier_return_id_example"; // string | 
$body = new \Emesa\PartnerPlatform\Model\PutReturnRequest(); // \Emesa\PartnerPlatform\Model\PutReturnRequest | Input data

try {
    $apiInstance->putReturn($market_order_id, $supplier_return_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->putReturn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **market_order_id** | **string**|  |
 **supplier_return_id** | **string**|  |
 **body** | [**\Emesa\PartnerPlatform\Model\PutReturnRequest**](../Model/PutReturnRequest.md)| Input data | [optional]

### Return type

void (empty response body)

### Authorization

[BearerToken](../../README.md#BearerToken), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

