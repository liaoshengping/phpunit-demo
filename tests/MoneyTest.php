<?php
use \PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    public function testCanBeNegated()
    {
        $a = new Money(1);

        $b = $a->negate();

        $this->assertEquals(-1, $b->getAmount());
    }
}
