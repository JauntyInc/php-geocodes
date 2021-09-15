# GeoCodes\DefaultApi

All URIs are relative to https://api.geo.codes.

Method | HTTP request | Description
------------- | ------------- | -------------
[**ping()**](DefaultApi.md#ping) | **GET** /ping | Ping the service without credentials


## `ping()`

```php
ping(): string
```

Ping the service without credentials

An endpoint that always responds with the string \"pong\". This can be used as a health check.<br><br>  This endpoint does not require an account to be accessed, and does not count as a lookup. Requests may still be rejected due to rate limiting to preserve the health of the service.  Alpha of Version 1 of the geo.codes API. Once V1 is stabilized, routes under `/v1` are guaranteed to follow semver-style backwards compatibility guarantees.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeoCodes\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->ping();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->ping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
