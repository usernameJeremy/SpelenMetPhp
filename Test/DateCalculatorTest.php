<?php

namespace Service\Calculators;

use PHPUnit\Framework\TestCase;

class DateCalculatorTest extends TestCase
{

    public function testCalculateNewExpirationDate()
    {

        $initialExpirationDate = new DateTime('2023-03-11');


        $newExpirationDate = clone $initialExpirationDate;
        if (in_array($newExpirationDate->format('N'), [6, 7])) {
            $newExpirationDate = $newExpirationDate->modify('next monday');
        }


        $expectedExpirationDate = new DateTime('2023-03-13');
        $this->assertEquals($expectedExpirationDate, $newExpirationDate);
    }
}
