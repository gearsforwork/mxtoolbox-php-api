# MxToolbox PHP API Wrapper

[![License](https://poser.pugx.org/php-tmdb/api/license.png)](LICENSE.txt)
[![Build Status](https://travis-ci.org/Vherus/mxtoolbox-php-api.svg?branch=master)](https://travis-ci.org/Vherus/mxtoolbox-php-api)

A PHP wrapper for use with the [MxToolbox API](http://mxtoolbox.com/productinfo/mxtoolboxapi).

Influenced by Michael Roterman's TMDB PHP API Wrapper (https://github.com/php-tmdb/api)

This project (currently in early development) aims to provide a PHP wrapper for the MxToolbox API and all it has to offer.


## Getting Started

Start by constructing your MxToolbox client

```php
$apiToken = new \Mxtb\ApiToken('your-api-key');
$mxtb = new \Mxtb\MxToolbox($apiToken);
```
If you want to use the "example.com" test domain provided by MxToolbox during development, pass an empty string to the ApiToken constructor.

The wrapper is set to use HTTPS by default. To force HTTP, pass false as an optional second parameter

```php
$mxtb = new \Mxtb\MxToolbox($apiToken, false);
```

## Using the API

We've tried to keep the usage of this package as intuitive as possible, so you should be able to guess the method to use in most cases.

First, let's create a repository for the API method we want to use (Lookup or Monitor)

```php
$repository = new Mxtb\Repository\Lookup\LookupNetworkRepository($mxtb);
```

Now we can decide which lookup we want to use. For example, if we want to lookup blacklisting for a domain:

```php
$blacklist = $repository->getBlacklist('github.com');

//To see what's contained in the response model, you could do something like below
//echo '<pre>';
//var_dump($blacklist);
```

From here, it should be intuition for the most part. If there is a UID field in the MxToolbox API response JSON, then
you should assume there is a getUid() method on the associated model. For example:

```php
$uid = $blacklist->getUid();
```

## Functional example

```php
namespace TestingMxtb;

use Mxtb\ApiToken;
use Mxtb\MxToolbox;
use Mxtb\Repository\Lookup\LookupNetworkRepository;

require '../vendor/autoload.php';

$mxtb = new MxToolbox(new ApiToken(''), false);
$repository = new LookupNetworkRepository($mxtb);
$blacklist = $repository->getBlacklist('example.com');

$passed = $blacklist->getPassed();

echo '<pre>';
var_dump($passed);
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.


## Credits

- [Nathan King](mailto:nkvherus@gmail.com)
- [Darien Livermore](mailto:daz.livermore@hotmail.com)


## License

Please see [LICENSE](LICENSE.txt) for more information.
