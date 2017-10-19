# PflegeDe\Partner\DefaultApi

All URIs are relative to *https://service.pflege.de/api/partner/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**helloWorldGet**](DefaultApi.md#helloWorldGet) | **GET** /hello-world | 
[**leadTreppenliftPost**](DefaultApi.md#leadTreppenliftPost) | **POST** /lead/treppenlift | 


# **helloWorldGet**
> helloWorldGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new PflegeDe\Partner\Api\DefaultApi();

try {
    $api_instance->helloWorldGet();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->helloWorldGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadTreppenliftPost**
> leadTreppenliftPost($partnerId, $body, $debug)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new PflegeDe\Partner\Api\DefaultApi();
$partnerId = "partnerId_example"; // string | 
$body = new \PflegeDe\Partner\Model\Treppenlift(); // \PflegeDe\Partner\Model\Treppenlift | 
$debug = true; // bool | Der Lead wird zwar gespeichert, intern aber nicht weiterverteilt und auch keine Affiliate-Transaktion angelegt

try {
    $api_instance->leadTreppenliftPost($partnerId, $body, $debug);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->leadTreppenliftPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partnerId** | **string**|  |
 **body** | [**\PflegeDe\Partner\Model\Treppenlift**](../Model/Treppenlift.md)|  |
 **debug** | **bool**| Der Lead wird zwar gespeichert, intern aber nicht weiterverteilt und auch keine Affiliate-Transaktion angelegt | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

