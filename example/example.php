<?php

require_once(__DIR__ . '/vendor/autoload.php');

$config = GeoCodes\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY_HERE');
$apiInstance = new GeoCodes\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = '111 8th Ave, New York, NY 10011';

try {
    $result = $apiInstance->v1AddressGeocode($q);
    print_r($result);
    printf("Latitude: [%f] Longitude: [%f]\n", $result['coordinate']['latitude'], $result['coordinate']['longitude']);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->v1AddressGeocode: ', $e->getMessage(), PHP_EOL;
}
