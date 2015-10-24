<?php

namespace Ibrows\PHPUnit\Learn\Calculator;

/**
 * Created by PhpStorm.
 * Project: phpunit-learn
 *
 * User: mikemeier
 * Date: 22.10.15
 * Time: 15:36
 */
class SimpleCalculator
{
    /**
     * @param float|int $a
     * @param float|int $b
     * @return float|int
     */
    public function multiply($a, $b)
    {
        return $a * $b;
    }
}