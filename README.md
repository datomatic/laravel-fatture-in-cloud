![Laravel-Fatture-in-Cloud-Dark](branding/dark.png#gh-dark-mode-only)![Laravel-Fatture-in-Cloud-Light](branding/light.png#gh-light-mode-only)
# Laravel wrapper for Fatture in Cloud API v2

[![Latest Version on Packagist](https://img.shields.io/packagist/v/datomatic/laravel-fatture-in-cloud.svg?style=for-the-badge)](https://packagist.org/packages/datomatic/laravel-fatture-in-cloud)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/datomatic/laravel-fatture-in-cloud/run-tests?style=for-the-badge&label=tests)](https://github.com/datomatic/laravel-fatture-in-cloud/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/datomatic/laravel-fatture-in-cloud/Fix%20PHP%20code%20style%20issues?style=for-the-badge&label=code%20style)](https://github.com/datomatic/laravel-fatture-in-cloud/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/datomatic/laravel-fatture-in-cloud.svg?style=for-the-badge)](https://packagist.org/packages/datomatic/laravel-fatture-in-cloud)

---
This Laravel wrapper allows you to integrate [Fatture in Cloud](https://fattureincloud.it) using Api v2.

## Requirements

- Laravel >= 8.37
- PHP >= 8.1
- ext-json

## Installation

You can install the package via composer:

```bash
composer require datomatic/laravel-fatture-in-cloud
```

Optionally, you can publish the config file with:
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

Get FattureInCloud class from service container or using `FattureInCloud` Facade.

```php
use Datomatic\FattureInCloud\Facades\FattureInCloud;
//Facade
FattureInCloud::invoice()->...

use Datomatic\FattureInCloud\FattureInCloud;

//Automatic Injection
public function __construct(FattureInCloud $fic){}

//Resolve
$fic = App::make(CartaDelDocenteClient::class);
$fic = app(Datomatic\FattureInCloud\FattureInCloud::class);
```

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

### Enums

To improve the use of api usage is included a comfortable list of utilities enums:
- DocumentStatus
- EntityType
- IssuedDocumentType
- ReceivedDocumentType
- PaymentStatus

### Utilities

The Fatture in CLoud API accept only a fullname on country field 🤦‍♂️ so i add a `Datomatic\FattureInCloud\Utilities\CountryConverter` utility class with  `fromAlpha2` and `fromName` methods.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Alberto Peripolli](https://github.com/trippo)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
