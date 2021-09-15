# GeoCodes\V1TestAndAuthenticationApi

All URIs are relative to https://api.geo.codes.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1Test()**](V1TestAndAuthenticationApi.md#v1Test) | **GET** /v1/test | 


## `v1Test()`

```php
v1Test(): string
```



**Description**  An endpoint that always responds with the string `authorized!` when authentication works. This can be used as a check that the authentication on a request is valid.  Please include your key on the `X-AUTHORIZATION` header or the query parameter `api_key` }  **No account required**  This endpoint requires an account to be accessed, but does not count as a lookup. Requests may still be rejected due to rate limiting by any facet (account, IP, etc), in order to preserve the health of the service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeoCodes\Api\V1TestAndAuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->v1Test();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1TestAndAuthenticationApi->v1Test: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
