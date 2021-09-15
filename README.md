# GeoCodes

The alpha version of the [https://geo.codes](https://geo.codes) API service. See API documentation [here](https://geo.codes/docs/api). 10,000 free queries per month.


## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/JauntyInc/php-geocodes.git"
    }
  ],
  "require": {
    "JauntyInc/php-geocodes": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/GeoCodes/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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


$apiInstance = new GeoCodes\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | The unstructured address to geocode. Expected to be roughly the format that is used by the USPS to deliver mail.
$min_confidence = 56; // int | The minimum confidence in the results required to return an address, as a percentage between 0 and 100. Default: 30. To accept only exact data matches, choose 100. To be as permissive as possible, set it to 0. We don't recommend setting this higher than 90. It is very common for people to write their own addresses in ways that deviate from the exact match.

try {
    $result = $apiInstance->v1AddressGeocode($q, $min_confidence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->v1AddressGeocode: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.geo.codes*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AddressApi* | [**v1AddressGeocode**](docs/Api/AddressApi.md#v1addressgeocode) | **GET** /v1/address/geocode | Geocode an unstructured address string
*AddressApi* | [**v1AddressStructuredGeocode**](docs/Api/AddressApi.md#v1addressstructuredgeocode) | **GET** /v1/address/structured_geocode | Geocode structured addresses
*AuthApi* | [**v1Test**](docs/Api/AuthApi.md#v1test) | **GET** /v1/test | Ping function that tests the API Key
*DefaultApi* | [**ping**](docs/Api/DefaultApi.md#ping) | **GET** /ping | Ping the service without credentials
*GeocodeApi* | [**v1AddressGeocode**](docs/Api/GeocodeApi.md#v1addressgeocode) | **GET** /v1/address/geocode | Geocode an unstructured address string
*GeocodeApi* | [**v1AddressReverseZipCode**](docs/Api/GeocodeApi.md#v1addressreversezipcode) | **GET** /v1/address/reverse_zip_code | Convert a coordinate to a ZIP Code
*GeocodeApi* | [**v1AddressStructuredGeocode**](docs/Api/GeocodeApi.md#v1addressstructuredgeocode) | **GET** /v1/address/structured_geocode | Geocode structured addresses
*GeocodeApi* | [**v1AddressZipCode**](docs/Api/GeocodeApi.md#v1addresszipcode) | **GET** /v1/address/zip_code | Convert a ZIP Code to a coordinate
*ZipCodeApi* | [**v1AddressReverseZipCode**](docs/Api/ZipCodeApi.md#v1addressreversezipcode) | **GET** /v1/address/reverse_zip_code | Convert a coordinate to a ZIP Code
*ZipCodeApi* | [**v1AddressZipCode**](docs/Api/ZipCodeApi.md#v1addresszipcode) | **GET** /v1/address/zip_code | Convert a ZIP Code to a coordinate

## Models

- [GCSCoordinate](docs/Model/GCSCoordinate.md)
- [Geocoding](docs/Model/Geocoding.md)
- [ReverseZIPCode](docs/Model/ReverseZIPCode.md)
- [USAddress](docs/Model/USAddress.md)
- [USStreetAddress](docs/Model/USStreetAddress.md)
- [ZIPCode](docs/Model/ZIPCode.md)

## Authorization

### ApiKeyHeaderAuth

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header



### ApiKeyURLAuth

- **Type**: API key
- **API key parameter name**: api_key
- **Location**: URL query string


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

help@geo.codes

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0-alpha`
    - Package version: `1.0.0-alpha`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
