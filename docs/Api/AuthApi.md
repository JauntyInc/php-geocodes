# GeoCodes\AuthApi

All URIs are relative to https://api.geo.codes.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1Test()**](AuthApi.md#v1Test) | **GET** /v1/test | Ping function that tests the API Key


## `v1Test()`

```php
v1Test(): string
```

Ping function that tests the API Key

**Description**  An endpoint that always responds with the string `authorized!` when authentication works. This can be used as a check that the authentication on a request is valid.  Please include your key on the `Authorization` header or the query parameter `api_key`  **No account required**  This endpoint requires an account to be accessed, but does not count as a lookup. Requests may still be rejected due to rate limiting by any facet (account, IP, etc), in order to preserve the health of the service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyHeaderAuth
$config = GeoCodes\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeoCodes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: ApiKeyURLAuth
$config = GeoCodes\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GeoCodes\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new GeoCodes\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v1Test();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->v1Test: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

[ApiKeyHeaderAuth](../../README.md#ApiKeyHeaderAuth), [ApiKeyURLAuth](../../README.md#ApiKeyURLAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
