<?php

namespace Uptodown\EqualableInterface\Tests;

use PHPUnit\Framework\TestCase;

class EqualableItemTest extends TestCase
{
    /** @test */
    public function twoItemsAreEqual()
    {
        $value = 'randomValue';
        $item1 = new EqualableItem($value);
        $item2 = new EqualableItem($value);
        $this->assertTrue($item1->equals($item2));
        $this->assertTrue($item2->equals($item1));
    }

    /** @test */
    public function twoItemsArentEqual()
    {
        $value1 = 'randomValue1';
        $value2 = 'randomValue2';
        $item1 = new EqualableItem($value1);
        $item2 = new EqualableItem($value2);
        $this->assertFalse($item1->equals($item2));
        $this->assertFalse($item2->equals($item1));
    }
}
