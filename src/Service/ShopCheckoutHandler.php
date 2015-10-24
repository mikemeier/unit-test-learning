<?php

namespace Ibrows\PHPUnit\Learn\Service;

use Ibrows\PHPUnit\Learn\Calculator\SimpleCalculator;
use Ibrows\PHPUnit\Learn\Item\SimpleItem;

/**
 * Created by PhpStorm.
 * Project: phpunit-learn
 *
 * User: mikemeier
 * Date: 22.10.15
 * Time: 15:21
 */
class ShopCheckoutHandler
{
    /**
     * @var SimpleCalculator
     */
    private $calculator;

    /**
     * @param SimpleCalculator $calculator
     */
    public function __construct(SimpleCalculator $calculator)
    {
        $this->calculator = $calculator;
    }

    /**
     * @param SimpleItem $item
     */
    public function checkoutSimpleItem(SimpleItem $item)
    {
        
    }
}