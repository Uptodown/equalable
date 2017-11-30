<?php

namespace Uptodown\EqualableInterface\Tests;

use Uptodown\EqualableInterface\Equalable;

class EqualableItem implements Equalable
{
    private $property;

    public function __construct($value)
    {
        $this->property = $value;
    }

    public function getProperty()
    {
        return $this->property;
    }

    public function equals($object) /* : bool */
    {
        return $this->property == $object->getProperty();
    }
}
