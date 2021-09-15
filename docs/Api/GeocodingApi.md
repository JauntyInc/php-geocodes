# GeoCodes\GeocodingApi

All URIs are relative to https://api.geo.codes.

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1AddressGeocode()**](GeocodingApi.md#v1AddressGeocode) | **GET** /v1/address/geocode | 
[**v1AddressReverseZipCode()**](GeocodingApi.md#v1AddressReverseZipCode) | **GET** /v1/address/reverse_zip_code | 
[**v1AddressStructuredGeocode()**](GeocodingApi.md#v1AddressStructuredGeocode) | **GET** /v1/address/structured_geocode | 
[**v1AddressZipCode()**](GeocodingApi.md#v1AddressZipCode) | **GET** /v1/address/zip_code | 


## `v1AddressGeocode()`

```php
v1AddressGeocode($q, $min_confidence): \GeoCodes\Model\ModelutilGeocoding
```



**Description**<br>  Geocode a single address. This parses the input address and matches it against our records to produce the geocoded result.  This does a best-attempt to geocode the given address in the face of human errors in the input data. This can be the wrong city (\"New York City\" instead of \"New York\") a missing postal code, a misspelled street name, house numbers that don't exist, etc.  As more corrections are needed, the certainty in the result drops. This can be tuned with a minimum certainty parameter. If our confidence in the result is less than the minimum certainty, it will not be returned. The default is 30. 30 was chosen to be robust against unclean data without returning results that are unlikely to be true. We don't recommend setting this parameter above 90 because exact matching is too restrictive for the mistakes that people typically make when writing addresses -- even people writing their own addresses will make mistakes that are never corrected because they Just Work.  **Lookup cost**<br>  This query requires an account. Please sign up at https://geo.codes/signup and get your API key at https://geo.codes/account/api  One query counts as one lookup. It only costs a query if it returns data. If you have exceeded your account quota, the request will not succeed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeoCodes\Api\GeocodingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q = 'q_example'; // string | The unstructured address to geocode. Expected to be roughly the format that is used by the USPS to deliver mail.
$min_confidence = 56; // int | The minimum confidence in the results required to return an address, as a percentage between 0 and 100. Default: 30. To accept only exact data matches, choose 100. To be as permissive as possible, set it to 0. We don't recommend setting this higher than 90. It is very common for people to write their own addresses in ways that deviate from the exact match.

try {
    $result = $apiInstance->v1AddressGeocode($q, $min_confidence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeocodingApi->v1AddressGeocode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| The unstructured address to geocode. Expected to be roughly the format that is used by the USPS to deliver mail. |
 **min_confidence** | **int**| The minimum confidence in the results required to return an address, as a percentage between 0 and 100. Default: 30. To accept only exact data matches, choose 100. To be as permissive as possible, set it to 0. We don&#39;t recommend setting this higher than 90. It is very common for people to write their own addresses in ways that deviate from the exact match. | [optional]

### Return type

[**\GeoCodes\Model\ModelutilGeocoding**](../Model/ModelutilGeocoding.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AddressReverseZipCode()`

```php
v1AddressReverseZipCode($latitude, $longitude, $strict): \GeoCodes\Model\ModelutilReverseZIPCode
```



**Description**<br>  Look up a single ZIP Code from the given latitude and longitude.  This performs a lookup based on US Census \"ZIP Code Tabulation Areas.\" These areas are calculated by the US Census based on the most common ZIP Codes within different US Census blocks. This is necessary because in practice, ZIP Codes are not defined by areas but are defined as collections of addresses. They correspond loosely to areas, but not exactly. To get an accurate ZIP Code for an address, see the geocoding endpoints.  For more information on ZIP Code tabulation areas and why ZIP Codes cannot be accurately represented by areas, [click here](https://geo.codes/resources/articles/complete-guide-to-zip-codes#what-are-zip-code-tabulation-areas).  They have the following limitations: - ZIP Code Tabulation Areas do not have full coverage of the land mass of the United States. This   only matters in remote areas without deliverable addresses; in practice this is fine.  In these cases, the API will return the closest tabulation area unless the `strict`  parameter is provided. - Addresses within a ZIP Code Tabulation Area might have different ZIP Codes. Geocoding an address   is the only way to get a perfect ZIP Code. - The PlusFour field on the return value will always be empty.  **Lookup cost**<br>  This query requires an account. Please sign up at https://geo.codes/signup and get your API key at https://geo.codes/account/api  One query counts as one lookup. It only costs a query if it returns data. If you have exceeded your account quota, the request will not succeed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeoCodes\Api\GeocodingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$latitude = 3.4; // double | The latitude of the query.
$longitude = 3.4; // double | The longitude of the query.
$strict = True; // bool | If true, will only return a result if the given point is within a zip code tabulation area, and will not return the closest one.

try {
    $result = $apiInstance->v1AddressReverseZipCode($latitude, $longitude, $strict);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeocodingApi->v1AddressReverseZipCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **latitude** | **double**| The latitude of the query. |
 **longitude** | **double**| The longitude of the query. |
 **strict** | **bool**| If true, will only return a result if the given point is within a zip code tabulation area, and will not return the closest one. | [optional]

### Return type

[**\GeoCodes\Model\ModelutilReverseZIPCode**](../Model/ModelutilReverseZIPCode.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AddressStructuredGeocode()`

```php
v1AddressStructuredGeocode($street_address, $city, $min_confidence, $postal_code, $state): \GeoCodes\Model\ModelutilGeocoding
```



**Description**<br>  Geocode a single structured address. This takes address components (street, city, state, etc) and matches it against our records to produce the geocoded result.  This does a best-attempt to geocode the given address in the face of human errors in the input data. This can be the wrong city (\"New York City\" instead of \"New York\") a missing postal code, a misspelled street name, house numbers that don't exist, etc.  As more corrections are needed, the certainty in the result drops. This can be tuned with a minimum certainty parameter. If our confidence in the result is less than the minimum certainty, it will not be returned. The default is 30%. 30% was chosen to be robust against unclean data without returning results that are unlikely to be true. We don't recommend setting this parameter above 90% because exact matching is too restrictive for the mistakes that people typically make when writing addresses -- even people writing their own addresses will make mistakes that are never corrected because they Just Work.  **Lookup cost**<br>  This query requires an account. Please sign up at https://geo.codes/signup and get your API key at https://geo.codes/account/api  One query counts as one lookup. It only costs a query if it returns data. If you have exceeded your account quota, the request will not succeed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeoCodes\Api\GeocodingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$street_address = 'street_address_example'; // string | The street address line, including the number and street type. An example is '101 Main St'.
$city = 'city_example'; // string | The city. Not required, but it's highly recommended that you add either the city or postal_code fields.
$min_confidence = 56; // int | The minimum confidence in the results required to return an address, as a percentage between 0 and 100. Default: 30. To accept only exact data matches, choose 100. To be as permissive as possible, set it to 0. We don't recommend setting this higher than 90. It is very common for people to write their own addresses in ways that deviate from the exact match.
$postal_code = 'postal_code_example'; // string | The postal code, for example, a ZIP code. Not required, but if this is not present, we recommend adding the city and the state for best results.
$state = 'state_example'; // string | The state with the address. Not required, but it's highly recommended that you add the postal_code if the state is not present.

try {
    $result = $apiInstance->v1AddressStructuredGeocode($street_address, $city, $min_confidence, $postal_code, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeocodingApi->v1AddressStructuredGeocode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **street_address** | **string**| The street address line, including the number and street type. An example is &#39;101 Main St&#39;. |
 **city** | **string**| The city. Not required, but it&#39;s highly recommended that you add either the city or postal_code fields. | [optional]
 **min_confidence** | **int**| The minimum confidence in the results required to return an address, as a percentage between 0 and 100. Default: 30. To accept only exact data matches, choose 100. To be as permissive as possible, set it to 0. We don&#39;t recommend setting this higher than 90. It is very common for people to write their own addresses in ways that deviate from the exact match. | [optional]
 **postal_code** | **string**| The postal code, for example, a ZIP code. Not required, but if this is not present, we recommend adding the city and the state for best results. | [optional]
 **state** | **string**| The state with the address. Not required, but it&#39;s highly recommended that you add the postal_code if the state is not present. | [optional]

### Return type

[**\GeoCodes\Model\ModelutilGeocoding**](../Model/ModelutilGeocoding.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AddressZipCode()`

```php
v1AddressZipCode($zip_code): \GeoCodes\Model\ModelutilGCSCoordinate
```



**Description**<br>  Convert a single ZIP Code into a latitude and longitude.  By default, this returns a point that is guaranteed to be interior to the given ZIP Code. It may not necessarily be the centroid, because the centroid of some ZIP Codes do not fall within their borders (imagine a ZIP Code that is shaped like a crescent).  If a Plus-4 ZIP code is passed, only the first 5 digits will be used (i.e. the +4 will be ignored).  This performs a lookup based on US Census \"ZIP Code Tabulation Areas.\" These areas are calculated by the US Census based on the most common ZIP Codes within different US Census blocks. This is necessary because in practice, ZIP Codes are not defined by areas but are defined as collections of addresses. They correspond loosely to areas, but not exactly. To get an accurate ZIP Code for an address, see the geocoding endpoints.  For more information on ZIP Code tabulation areas and why ZIP Codes cannot be accurately represented by areas, [click here](https://geo.codes/resources/articles/complete-guide-to-zip-codes#what-are-zip-code-tabulation-areas).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeoCodes\Api\GeocodingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zip_code = 'zip_code_example'; // string | The ZIP Code of the query. Can be a ZIP Code or a ZIP+4 Code. If a +4 extension is passed, it will be ignored.

try {
    $result = $apiInstance->v1AddressZipCode($zip_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeocodingApi->v1AddressZipCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zip_code** | **string**| The ZIP Code of the query. Can be a ZIP Code or a ZIP+4 Code. If a +4 extension is passed, it will be ignored. |

### Return type

[**\GeoCodes\Model\ModelutilGCSCoordinate**](../Model/ModelutilGCSCoordinate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
