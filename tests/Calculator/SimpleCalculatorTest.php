<?php

namespace Ibrows\PHPUnit\Learn\Test\Calculator;

use Ibrows\PHPUnit\Learn\Calculator\SimpleCalculator;

/**
 * Created by PhpStorm.
 * Project: phpunit-learn
 *
 * User: mikemeier
 * Date: 22.10.15
 * Time: 17:24
 */
class SimpleCalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testMultiply()
    {
        $calculator = new SimpleCalculator();
        $this->assertSame(10, $calculator->multiply(2, 5));
    }
}