# caridea-random
Caridea is a miniscule PHP application library. This shrimpy fellow is what you'd use when you just want some helping hands and not a full-blown framework.

![](http://libreworks.com/caridea-100.png)

This is its random number generation component. It has providers for Mcrypt and OpenSSL. Other random number generation in PHP isn't considered secure enough to have an adapter here.

[![Build Status](https://travis-ci.org/libreworks/caridea-random.svg)](https://travis-ci.org/libreworks/caridea-random)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/libreworks/caridea-random/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/libreworks/caridea-random/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/libreworks/caridea-random/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/libreworks/caridea-random/?branch=master)

## Installation

You can install this library using Composer:

```console
$ composer require caridea/random
```

This project requires PHP 5.5 and has no dependencies.

## Compliance

Releases of this library will conform to [Semantic Versioning](http://semver.org).

Our code is intended to comply with [PSR-1](http://www.php-fig.org/psr/psr-1/), [PSR-2](http://www.php-fig.org/psr/psr-2/), and [PSR-4](http://www.php-fig.org/psr/psr-4/). If you find any issues related to standards compliance, please send a pull request!

## Examples

Just a few quick examples.

```php
if (\Caridea\Random\Mcrypt::isAvailable()) {
    $rando = new \Caridea\Random\Mcrypt();
    $bytes = $rando->generate(32);
}
if (\Caridea\Random\OpenSsl::isAvailable()) {
    $rando = new \Caridea\Random\OpenSsl();
    $bytes = $rando->generate(32);
}
```
