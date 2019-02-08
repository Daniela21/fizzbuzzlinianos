<?php

use App\Factory\MultiplesFactory;

class MultiplesFactoryTest extends \PHPUnit\Framework\TestCase
{
    public function testCheckIfMultiplesValueConvertsToStringDifferentToMultiples()
    {
        $values = new MultiplesFactory([3 => 'Linio', 5 => 'IT', 15 => 'Linianos']);

        $searchingTheMultiple = $values->searchingTheMultiple(4);

        $this->assertNotEmpty($searchingTheMultiple);
        $this->assertInternalType('string', $searchingTheMultiple);
        $this->assertNotEquals('Linio', $searchingTheMultiple);
        $this->assertNotEquals('IT', $searchingTheMultiple);
        $this->assertNotEquals('Linianos', $searchingTheMultiple);
    }

    public function testCheckIfConvertsTheMultiplesOfThreeToTheIndicatedString()
    {
        $values = new MultiplesFactory([3 => 'Linio', 5 => 'IT', 15 => 'Linianos']);

        $searchingTheMultiple = $values->searchingTheMultiple(3);

        $this->assertNotEmpty($searchingTheMultiple);
        $this->assertInternalType('string', $searchingTheMultiple);
        $this->assertEquals('Linio', $searchingTheMultiple);
    }

    public function testCheckIfConvertsTheMultiplesOfFiveToTheIndicatedString()
    {
        $values = new MultiplesFactory([3 => 'Linio', 5 => 'IT', 15 => 'Linianos']);

        $searchingTheMultiple = $values->searchingTheMultiple(5);

        $this->assertNotEmpty($searchingTheMultiple);
        $this->assertInternalType('string', $searchingTheMultiple);
        $this->assertEquals('IT', $searchingTheMultiple);
    }

    public function testCheckIfConvertsTheMultiplesOfFifteenToTheIndicatedString()
    {
        $values = new MultiplesFactory([3 => 'Linio', 5 => 'IT', 15 => 'Linianos']);

        $searchingTheMultiple = $values->searchingTheMultiple(15);

        $this->assertNotEmpty($searchingTheMultiple);
        $this->assertInternalType('string', $searchingTheMultiple);
        $this->assertEquals('Linianos', $searchingTheMultiple);
    }
}
