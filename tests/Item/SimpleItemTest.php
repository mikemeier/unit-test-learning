<?php

namespace Ibrows\PHPUnit\Learn\Test\Item;

use Ibrows\PHPUnit\Learn\Item\SimpleItem;

/**
 * Created by PhpStorm.
 * Project: phpunit-learn
 *
 * User: mikemeier
 * Date: 22.10.15
 * Time: 17:26
 */
class SimpleItemTest extends \PHPUnit_Framework_TestCase
{
    public function testGetters()
    {
        $item = new SimpleItem(5, 10.10);
        $this->assertSame(5, $item->getAmount());
        $this->assertSame(10.10, $item->getPrice());
    }
}