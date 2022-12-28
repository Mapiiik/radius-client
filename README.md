# RADIUS Client (PHP implementation)

[![Source Code][badge-source]][source]
[![Latest Version][badge-release]][release]
[![Software License][badge-license]][license]
[![Build Status][badge-build]][build]
[![Coverage Status][badge-coverage]][coverage]
[![Total Downloads][badge-downloads]][downloads]

mapik/radius-client is a PHP 5.5+ RADIUS client implementation.

## Installation

The preferred method of installation is via [Packagist][] and [Composer][]. Run the following command to install the package and add it as a requirement to your project's `composer.json`:

```bash
composer require mapik/radius-client
```

## Usage

```php
<?php

use Mapik\RadiusClient\Client;
use Mapik\RadiusClient\Packet;
use Mapik\RadiusClient\PacketType;

$client = new Client('udp://127.0.0.1:1812', /* timeout */ 2);
$response = $client->send(new Packet(PacketType::ACCESS_REQUEST(), /* secret */ 'xyzzy5461', [
    'User-Name' => 'nemo',
    'User-Password' => 'arctangent',
]));

if ($response->getType() !== PacketType::ACCESS_ACCEPT()) {
    throw new \RuntimeException('Unable to authenticate as user "nemo"');
}
```

## Dictionary

The following RADIUS dictionaries are supported out-of-the-box:

* MikroTik
* RFC 2865
* RFC 2866
* RFC 2867
* RFC 2868
* RFC 2869
* RFC 3162
* RFC 3576
* RFC 3580
* RFC 4072
* RFC 4372
* RFC 4603
* RFC 4675
* RFC 4679
* RFC 4818
* RFC 4849
* RFC 5090
* RFC 5176

### Custom Dictionary

Additional attributes can be registered by creating a custom dictionary class that implements `Mapik\RadiusClient\DictionaryInterface`. 

## Copyright and License

The mapik/radius-client library is copyright © [Jonas Stendahl](https://stendahl.me/) and licensed for use under the MIT License (MIT). Please see [LICENSE][] for more information.

[packagist]: https://packagist.org/packages/mapik/radius-client
[composer]: http://getcomposer.org/

[badge-source]: https://img.shields.io/badge/source-mapik/radius-client-blue.svg?style=flat-square
[badge-release]: https://img.shields.io/packagist/v/mapik/radius-client.svg?style=flat-square
[badge-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[badge-build]: https://img.shields.io/travis/jyggen/radius/master.svg?style=flat-square
[badge-coverage]: https://img.shields.io/coveralls/jyggen/radius/master.svg?style=flat-square
[badge-downloads]: https://img.shields.io/packagist/dt/mapik/radius-client.svg?style=flat-square

[source]: https://github.com/jyggen/radius
[release]: https://packagist.org/packages/mapik/radius-client
[license]: https://github.com/jyggen/radius/blob/master/LICENSE
[build]: https://travis-ci.org/jyggen/radius
[coverage]: https://coveralls.io/r/jyggen/radius?branch=master
[downloads]: https://packagist.org/packages/mapik/radius-client
