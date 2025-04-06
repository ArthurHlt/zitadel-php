#!/bin/bash

buf generate

sed -i "" 's/"2XX"/"200"/g' openapiv2/apidocs.swagger.json

sed -i "" 's/$CUSTOM-DOMAIN/zitadel.cloud/g' openapiv2/apidocs.swagger.json

jq '.consumes = ["application/json"] | .produces = ["application/json"]' \
  openapiv2/apidocs.swagger.json > openapiv2/temp.json
mv openapiv2/temp.json openapiv2/apidocs.swagger.json

jq '(.paths[]) |= (
  if has("post") then
    .post.responses |= (
      if has("200") then
        .["201"] = .["200"] |
        .["202"] = .["200"] |
        .["203"] = .["200"]
      else
        .
      end
    )
  end
)' openapiv2/apidocs.swagger.json > openapiv2/temp.json
mv openapiv2/temp.json openapiv2/apidocs.swagger.json

jq '(.paths[]) |= (
  if has("put") then
    .put.responses |= (
      if has("200") then
        .["201"] = .["200"] |
        .["202"] = .["200"] |
        .["203"] = .["200"]
      else
        .
      end
    )
  end
)' openapiv2/apidocs.swagger.json > openapiv2/temp.json
mv openapiv2/temp.json openapiv2/apidocs.swagger.json

jq '(.paths[]) |= (
  if has("patch") then
    .patch.responses |= (
      if has("200") then
        .["201"] = .["200"] |
        .["202"] = .["200"] |
        .["203"] = .["200"]
      else
        .
      end
    )
  end
)' openapiv2/apidocs.swagger.json > openapiv2/temp.json
mv openapiv2/temp.json openapiv2/apidocs.swagger.json


openapi-generator generate \
  -i openapiv2/apidocs.swagger.json \
  -g php --skip-validate-spec \
  --git-user-id "arthurhlt" \
  --git-repo-id "zitadel-php" \
  -c config.yaml \
  --library psr-18 \
  -o .