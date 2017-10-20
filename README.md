# pflege.de-Partner
The Partner-API of pflege.de to create Affiliate-Leads programmatically

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/webcareLBJ/partner-api.git"
    }
  ],
  "require": {
    "webcareLBJ/partner-api": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/pflege.de-Partner/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new PflegeDe\Partner\Api\DefaultApi();

try {
    echo $api_instance->helloWorldGet()->hello;
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->helloWorldGet: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://service.pflege.de/api/partner/1.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**helloWorldGet**](docs/Api/DefaultApi.md#helloworldget) | **GET** /hello-world | 
*DefaultApi* | [**leadTreppenliftPost**](docs/Api/DefaultApi.md#leadtreppenliftpost) | **POST** /lead/treppenlift | 


## Documentation For Models

 - [LeadIdResponse](docs/Model/LeadIdResponse.md)
 - [Treppenlift](docs/Model/Treppenlift.md)
 - [UnauthorizedError](docs/Model/UnauthorizedError.md)


## Documentation For Authorization


## ApiKeyAuth

- **Type**: API key
- **API key parameter name**: X-API-KEY
- **Location**: HTTP header


## Author




