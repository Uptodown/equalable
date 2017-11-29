# Equalable Interface

An interface for checking equal objects

## Installation

To install it with composer:
```
composer require uptodown/equalable
```

## Simple usage

The object

```php
use Uptodown\EqualableInterface\Equalable;

class NewObject implements Equalable
{
    public function equals($object)
    {
        return /* equal condition */;
    }
}
