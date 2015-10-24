<?php

namespace Ibrows\PHPUnit\Learn\Test;

/**
 * Created by PhpStorm.
 * Project: phpunit-learn
 *
 * User: mikemeier
 * Date: 22.10.15
 * Time: 15:19
 */
class SimpleTest extends \PHPUnit_Framework_TestCase
{
    public function testBootstrapAutoloader()
    {
        $this->assertTrue(class_exists(AutoloaderCheckClass::class));
    }
}