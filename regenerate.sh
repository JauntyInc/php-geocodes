#!/bin/bash

openapi-generator-cli generate -i https://api.geo.codes/swagger/doc.json -g php -o . -c config.yaml
rm -rf ./test # This just generates empty stubs
