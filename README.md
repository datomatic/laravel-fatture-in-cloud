# Laravel wrapper for Fatture in Cloud API v2

[![Latest Version on Packagist](https://img.shields.io/packagist/v/datomatic/laravel-fatture-in-cloud.svg?style=flat-square)](https://packagist.org/packages/datomatic/laravel-fatture-in-cloud)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/datomatic/laravel-fatture-in-cloud/run-tests?label=tests)](https://github.com/datomatic/laravel-fatture-in-cloud/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/datomatic/laravel-fatture-in-cloud/Check%20&%20fix%20styling?label=code%20style)](https://github.com/datomatic/laravel-fatture-in-cloud/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/datomatic/laravel-fatture-in-cloud.svg?style=flat-square)](https://packagist.org/packages/datomatic/laravel-fatture-in-cloud)

---
This Laravel wrapper allows you to integrate [Fatture in Cloud](https://fattureincloud.it) using Api v2.
<img src="https://s3.eu-west-1.amazonaws.com/fattureincloud-landing/img/loghi/logo-fic-blu.png" alt="Fatture in Cloud"/>


## Installation

You can install the package via composer:

```bash
composer require datomatic/laravel-fatture-in-cloud
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Datomatic\FattureInCloud\FattureInCloudServiceProvider" --tag="laravel-fatture-in-cloud-config"
```

This is the contents of the published config file:

```php
return [
    'access_token'  => env('FATTURE_IN_CLOUD_ACCESS_TOKEN'),
    'company_id'  => env('FATTURE_IN_CLOUD_COMPANY_ID'),
    'endpoint' => env('FATTURE_IN_CLOUD_ENDPOINT','https://api-v2.fattureincloud.it/'),
];
```

## Usage

Get FattureInCloud class from service container.

Example on controller  
`public function __construct(FattureInCloud $fic)`  

Example with app helper  
`$fic = app(Datomatic\FattureInCloud\FattureInCloud::class)`

Use the Fatture In CLoud utilities classes

`$fic->clients()->create([... user array...]);`

Please see the functionalities and the array to pass on [Official Documentation](https://fattureincloud.docs.stoplight.io)  

This is the utilities covered:
- user()
- info()
- products()
- clients()
- suppliers()
- invoices()
- quotes()
- proformas()
- receipts()
- deliveryNotes()
- creditNotes()
- orders()
- work_reports()
- supplierOrders()
- expenses()
- passiveCreditNotes()
- passiveDeliveryNotes()
- paymentAccounts()
- paymentMethods()

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Credits

- [Alberto](https://github.com/Tr1pp0)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
