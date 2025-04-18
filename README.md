# zitadel-php

[Zitadel](https://zitadel.com) php client for interacting with the [Zitadel API](https://zitadel.com/docs/api/)

## Regenerate/update

Zitadel is a protobuf project and give proto file containing openapi convertion.

Instead of directly use grpc/protobuf in php, I have preferred to use openapi to generate php client because
there is more chance to have a better support and more people are familiar with openapi and php generation is a
nightmare if using other api which have not been generated before.

**Requirements**

- [buf](https://buf.build/docs/install) to generate the openapi file from proto
- [openapi-generator](https://openapi-generator.tech/docs/installation) to generate the php client

**Steps**

- Clone this repository
- Take a look at [/buf.gen.yaml](/buf.gen.yaml) to change to the zitadel version you want to generate
- Run `./generate.sh` to generate the openapi file and php classes
- Commit the changes

## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "require": {
    "arthurhlt/zitadel-php": "^0.3"
  }
}
```

Then run `composer install`

Your project is free to choose the http client of your choice
Please require packages that will provide http client functionality:
https://packagist.org/providers/psr/http-client-implementation
https://packagist.org/providers/php-http/async-client-implementation
https://packagist.org/providers/psr/http-factory-implementation

As an example:

```
composer require guzzlehttp/guzzle php-http/guzzle7-adapter http-interop/http-factory-guzzle
```

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/zitadel-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: OAuth2
$config = ArthurHlt\Zitadel\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ArthurHlt\Zitadel\Api\ActionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | id of the flow
$xZitadelOrgid = 'xZitadelOrgid_example'; // string | The default is always the organization of the requesting user. If you like to get users of another organization include the header. Make sure the user has permission to access the requested data.

try {
    $result = $apiInstance->managementServiceClearFlow($type, $xZitadelOrgid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->managementServiceClearFlow: ', $e->getMessage(), PHP_EOL;
}

```

## Authorization

### BasicAuth

- **Type**: HTTP basic authentication

### OAuth2

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `zitadel.cloud/oauth/v2/authorize`
- **Scopes**:
    - **openid**: openid
    - **urn:zitadel:iam:org:project:id:zitadel:aud**: urn:zitadel:iam:org:project:id:zitadel:aud

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

hi@zitadel.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
    - Generator version: `7.12.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
