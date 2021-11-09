# Emesa\PartnerPlatform\OrdersApi

All URIs are relative to *https://market.emesa.org/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrder**](OrdersApi.md#getorder) | **GET** /supplier-api/v1/orders/{marketOrderId} | Get order
[**listOrders**](OrdersApi.md#listorders) | **GET** /supplier-api/v1/orders | List orders
[**orderConfirm**](OrdersApi.md#orderconfirm) | **PUT** /supplier-api/v1/orders/{marketOrderId}/state/confirmed | Confirm order received

# **getOrder**
> \Emesa\PartnerPlatform\Model\OrderDto getOrder($market_order_id)

Get order

Retrieve a single order by a Market Order ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Emesa\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = Emesa\PartnerPlatform\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Emesa\PartnerPlatform\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$market_order_id = "market_order_id_example"; // string | 

try {
    $result = $apiInstance->getOrder($market_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **market_order_id** | **string**|  |

### Return type

[**\Emesa\PartnerPlatform\Model\OrderDto**](../Model/OrderDto.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOrders**
> \Emesa\PartnerPlatform\Model\OrderList listOrders($limit, $offset, $states)

List orders

By default only new orders are listed, but you can also list confirmed orders by using the states filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Emesa\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = Emesa\PartnerPlatform\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Emesa\PartnerPlatform\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // int | Maximum number of entities to return
$offset = 0; // int | Skip first N items
$states = array("[\"new\"]"); // string[] | 

try {
    $result = $apiInstance->listOrders($limit, $offset, $states);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->listOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum number of entities to return | [optional] [default to 100]
 **offset** | **int**| Skip first N items | [optional] [default to 0]
 **states** | [**string[]**](../Model/string.md)|  | [optional] [default to [&quot;new&quot;]]

### Return type

[**\Emesa\PartnerPlatform\Model\OrderList**](../Model/OrderList.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderConfirm**
> orderConfirm($market_order_id)

Confirm order received

Move the order to the confirmed state. This will remove it from the list of orders with states[]=new (default filter).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Emesa\PartnerPlatform\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: ClientCredentials
$config = Emesa\PartnerPlatform\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Emesa\PartnerPlatform\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$market_order_id = "market_order_id_example"; // string | 

try {
    $apiInstance->orderConfirm($market_order_id);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->orderConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **market_order_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[BearerToken](../../README.md#BearerToken), [ClientCredentials](../../README.md#ClientCredentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

