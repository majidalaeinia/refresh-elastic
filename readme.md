# Refresh Elastic

You can use this package to refresh elastic indices (delete the index and make the index again with its corresponding mapping).  
Inspired by [Laravel RefreshDatabase](https://github.com/guiwoda/laravel-framework/blob/master/src/Illuminate/Foundation/Testing/RefreshDatabase.php). 

## Installation

Via Composer

``` bash
$ composer require majidalaeinia/refresh-elastic --dev
```

## Usage

First you need to publish the config file.
```bash
php artisan vendor:publish --tag=majidalaeinia-refresh-elastic.config
````
Fill the config file with appropriate values.


Then, use the `RefreshElastic` trait on your test.

```php
<?php

namespace Tests\Feature\FancyTests;

use MajidAlaeinia\RefreshElastic\Traits\RefreshElastic;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class YourFancyTest extends TestCase
{
    use RefreshDatabase, RefreshElastic;
    
}
```

**Important NOTE:** Make sure you are using this package on the development mode, because this trait deletes your 
elastic indices and re-indexes them.

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email alaeinia.majid@.com instead of using the issue tracker.

## Credits

- [Majid Alaeinia](https://github.com/majidalaeinia)

## TODO
- [ ] Add tests

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/majidalaeinia/refresh-elastic.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/majidalaeinia/refresh-elastic.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/majidalaeinia/refresh-elastic/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/majidalaeinia/refresh-elastic
[link-downloads]: https://packagist.org/packages/majidalaeinia/refresh-elastic
[link-travis]: https://travis-ci.org/majidalaeinia/refresh-elastic
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/majidalaeinia
[link-contributors]: ../../contributors
