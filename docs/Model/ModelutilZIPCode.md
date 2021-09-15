# # ModelutilZIPCode

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**formatted** | **string** | A string with the formatted version of the ZIP code. This may include the +4 extension if available. | [optional]
**plus_four** | **int** | The optional plus-four code, if available. Note that this will omit leading zeroes, so if you need to display the ZIP Code, you need to either pad with zeroes or use the &#39;formatted&#39; field. Provided as a convenience for developers that need the numeric form. | [optional]
**zip** | **int** | The main 5-digit ZIP Code. Note that this will omit leading zeroes, so if you need to display the ZIP Code, you need to either pad with zeroes or use the &#39;formatted&#39; field. Provided as a convenience for developers that need the numeric form. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
