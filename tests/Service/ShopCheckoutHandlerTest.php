<?php

/**
 * Created by PhpStorm.
 * Project: phpunit-learn
 *
 * User: mikemeier
 * Date: 22.10.15
 * Time: 17:30
 */

namespace Ibrows\PHPUnit\Learn\Test\Service;

use Ibrows\PHPUnit\Learn\Calculator\SimpleCalculator;
use Ibrows\PHPUnit\Learn\Service\ShopCheckoutHandler;

class ShopCheckoutHandlerTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $calculator = new SimpleCalculator();
        $service = new ShopCheckoutHandler($calculator);

    }
}