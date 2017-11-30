# Equalable Interface

An interface for checking equal objects

[![Packagist](https://img.shields.io/packagist/dt/uptodown/equalable.svg?style=flat-square)](https://packagist.org/packages/uptodown/random-username-generator) [![MIT License](https://img.shields.io/badge/license-MIT-007EC7.svg?style=flat-square)](http://opensource.org/licenses/MIT)

## Installation

To install it with composer:
```
composer require uptodown/equalable
```

## Simple usage

The object:

```php
use Uptodown\EqualableInterface\Equalable;

class NewObject implements Equalable
{
    public function equals($object)
    {
        return /* equal condition */;
    }
}
```

The usage:

```php
if ($newObject->equals($otherNewObject)) {
    // do something
}
```
