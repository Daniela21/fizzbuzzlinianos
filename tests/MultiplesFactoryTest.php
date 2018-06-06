<?php

use App\Factory\MultiplesFactory;

class MultiplesFactoryTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function checkIfMultiplesValueConvertsToStringDifferentToMultiples()
    {
        $values = new MultiplesFactory([3 => 'Linio', 5 => 'IT', 15 => 'Linianos']);

        $searchingTheMultiple = $values->searchingTheMultiple(4);

        $this->assertNotEmpty($searchingTheMultiple);
        $this->assertInternalType('string', $searchingTheMultiple);
        $this->assertNotEquals('Linio', $searchingTheMultiple);
        $this->assertNotEquals('IT', $searchingTheMultiple);
        $this->assertNotEquals('Linianos', $searchingTheMultiple);
    }

    /** @test */
    public function checkIfConvertsTheMultiplesOfThreeToTheIndicatedString()
    {
        $values = new MultiplesFactory([3 => 'Linio', 5 => 'IT', 15 => 'Linianos']);

        $searchingTheMultiple = $values->searchingTheMultiple(3);

        $this->assertNotEmpty($searchingTheMultiple);
        $this->assertInternalType('string', $searchingTheMultiple);
        $this->assertEquals('Linio', $searchingTheMultiple);
    }

    /** @test */
    public function checkIfConvertsTheMultiplesOfFiveToTheIndicatedString()
    {
        $values = new MultiplesFactory([3 => 'Linio', 5 => 'IT', 15 => 'Linianos']);

        $searchingTheMultiple = $values->searchingTheMultiple(5);

        $this->assertNotEmpty($searchingTheMultiple);
        $this->assertInternalType('string', $searchingTheMultiple);
        $this->assertEquals('IT', $searchingTheMultiple);
    }

    /** @test */
    public function checkIfConvertsTheMultiplesOfFifteenToTheIndicatedString()
    {
        $values = new MultiplesFactory([3 => 'Linio', 5 => 'IT', 15 => 'Linianos']);

        $searchingTheMultiple = $values->searchingTheMultiple(15);

        $this->assertNotEmpty($searchingTheMultiple);
        $this->assertInternalType('string', $searchingTheMultiple);
        $this->assertEquals('Linianos', $searchingTheMultiple);
    }
}
