<?php

namespace Ibrows\PHPUnit\Learn\Item;

/**
 * Created by PhpStorm.
 * Project: phpunit-learn
 *
 * User: mikemeier
 * Date: 22.10.15
 * Time: 15:38
 */
class SimpleItem
{
    /**
     * @var int
     */
    private $amount;

    /**
     * @var float
     */
    private $price;

    /**
     * @param int $amount
     * @param float $price
     */
    public function __construct($amount, $price)
    {
        $this->amount = $amount;
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }
}