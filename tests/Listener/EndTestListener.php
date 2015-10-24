<?php

namespace Ibrows\PHPUnit\Learn\Test\Listener;

/**
 * Created by PhpStorm.
 * Project: phpunit-learn
 *
 * User: mikemeier
 * Date: 22.10.15
 * Time: 16:55
 */
class EndTestListener extends \PHPUnit_Framework_BaseTestListener
{
    /**
     * @param \PHPUnit_Framework_Test $test
     * @param float $time
     */
    public function endTest(\PHPUnit_Framework_Test $test, $time)
    {
        printf("%s: Test '%s' ended.\n", get_class($this), $test->getName());
    }
}