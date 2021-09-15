# GeoCodes\ZipCodeApi

All URIs are relative to https://api.geo.codes.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1AddressReverseZipCode()**](ZipCodeApi.md#v1AddressReverseZipCode) | **GET** /v1/address/reverse_zip_code | Convert a coordinate to a ZIP Code
[**v1AddressZipCode()**](ZipCodeApi.md#v1AddressZipCode) | **GET** /v1/address/zip_code | Convert a ZIP Code to a coordinate


## `v1AddressReverseZipCode()`

```php
v1AddressReverseZipCode($latitude, $longitude, $strict): \GeoCodes\Model\ReverseZIPCode
```

Convert a coordinate to a ZIP Code

**Description**<br>  Look up a single ZIP Code from the given latitude and longitude.  This performs a lookup based on US Census \"ZIP Code Tabulation Areas.\" These areas are calculated by the US Census based on the most common ZIP Codes within different US Census blocks. This is necessary because in practice, ZIP Codes are not defined by areas but are defined as collections of addresses. They correspond loosely to areas, but not exactly. To get an accurate ZIP Code for an address, see the geocoding endpoints.  For more information on ZIP Code tabulation areas and why ZIP Codes cannot be accurately represented by areas, [click here](https://geo.codes/resources/articles/complete-guide-to-zip-codes#what-are-zip-code-tabulation-areas).  They have the following limitations: - ZIP Code Tabulation Areas do not have full coverage of the land mass of the United States. This only matters in remote areas without deliverable addresses; in practice this is fine. In these cases, the API will return the closest tabulation area unless the ` + \"`strict`\" + ` parameter is provided. - Addresses within a ZIP Code Tabulation Area might have different ZIP Codes. Geocoding an address is the only way to get a perfect ZIP Code. - The PlusFour field on the return value will always be empty.  **Lookup cost**<br>  This query requires an account. Please sign up at https://geo.codes/signup and get your API key at https://geo.codes/account/api  One query counts as one lookup. It only costs a query if it returns data. If you have exceeded your account quota, the request will not succeed.

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


$apiInstance = new GeoCodes\Api\ZipCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$latitude = 3.4; // float | The latitude of the query
$longitude = 3.4; // float | The longitude of the query
$strict = True; // bool | If true, will only return a result if the given point is within a zip code tabulation area, and will not return the closest one.

try {
    $result = $apiInstance->v1AddressReverseZipCode($latitude, $longitude, $strict);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZipCodeApi->v1AddressReverseZipCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **latitude** | **float**| The latitude of the query |
 **longitude** | **float**| The longitude of the query |
 **strict** | **bool**| If true, will only return a result if the given point is within a zip code tabulation area, and will not return the closest one. | [optional]

### Return type

[**\GeoCodes\Model\ReverseZIPCode**](../Model/ReverseZIPCode.md)

### Authorization

[ApiKeyHeaderAuth](../../README.md#ApiKeyHeaderAuth), [ApiKeyURLAuth](../../README.md#ApiKeyURLAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AddressZipCode()`

```php
v1AddressZipCode($zip_code): \GeoCodes\Model\ZIPCode
```

Convert a ZIP Code to a coordinate

**Description**<br>  Convert a single ZIP Code into a latitude and longitude.  By default, this returns a point that is guaranteed to be interior to the given ZIP Code. It may not necessarily be the centroid, because the centroid of some ZIP Codes do not fall within their borders (imagine a ZIP Code that is shaped like a crescent).  If a Plus-4 ZIP code is passed, only the first 5 digits will be used (i.e. the +4 will be ignored).  This performs a lookup based on US Census \"ZIP Code Tabulation Areas.\" These areas are calculated by the US Census based on the most common ZIP Codes within different US Census blocks. This is necessary because in practice, ZIP Codes are not defined by areas but are defined as collections of addresses. They correspond loosely to areas, but not exactly. To get an accurate ZIP Code for an address, see the geocoding endpoints.  For more information on ZIP Code tabulation areas and why ZIP Codes cannot be accurately represented by areas, [click here](https://geo.codes/resources/articles/complete-guide-to-zip-codes#what-are-zip-code-tabulation-areas).

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


$apiInstance = new GeoCodes\Api\ZipCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zip_code = 'zip_code_example'; // string | The ZIP Code of the query. Can be a ZIP Code or a ZIP+4 Code. If a +4 extension is passed, it will be ignored.

try {
    $result = $apiInstance->v1AddressZipCode($zip_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZipCodeApi->v1AddressZipCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zip_code** | **string**| The ZIP Code of the query. Can be a ZIP Code or a ZIP+4 Code. If a +4 extension is passed, it will be ignored. |

### Return type

[**\GeoCodes\Model\ZIPCode**](../Model/ZIPCode.md)

### Authorization

[ApiKeyHeaderAuth](../../README.md#ApiKeyHeaderAuth), [ApiKeyURLAuth](../../README.md#ApiKeyURLAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
