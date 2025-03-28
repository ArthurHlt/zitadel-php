#!/bin/bash

buf generate

sed -i "" 's/$CUSTOM-DOMAIN/zitadel.cloud/g' openapiv2/apidocs.swagger.json

openapi-generator generate \
  -i openapiv2/apidocs.swagger.json \
  -g php --skip-validate-spec \
  --git-user-id "arthurhlt" \
  --git-repo-id "zitadel-php" \
  -c config.yaml \
  --library psr-18 \
  -o .