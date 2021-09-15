# # ModelutilGeocoding

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**confidence** | **int** | The confidence that the address was correctly geocoded. Range 0-100. 100 was an exact record match, 0 is a wild guess. |
**coordinate** | [**\GeoCodes\Model\ModelutilGCSCoordinate**](ModelutilGCSCoordinate.md) |  | [optional]
**dataset_citation_required** | **bool** | Whether the original data source requires citation via their license terms. This is not used at the moment, but will be in the future. |
**matched_address** | [**\GeoCodes\Model\ModelutilUSAddress**](ModelutilUSAddress.md) |  |
**result_dataset** | **string** | The dataset that the result was derived from. |
**result_location** | **string** | The description of where the point is. At the moment, all of the points are offset from the road, but in the future this will additionally include rooftop and entrance locations. |
**result_type** | **string** | Describes how the location was derived. All geocodings are interpolated at the moment, but in the future this will include direct lookups. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
