<?php

use App\Iterator\MultiplesIterator;

class MultiplesIteratorTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function checkIfMultiplesIteratorGetString()
    {
        $multiplesIterator = new MultiplesIterator(1, 100, [3 => 'Linio', 5 => 'IT', 15 => 'Linianos']);

        $this->assertObjectHasAttribute('from', $multiplesIterator);
        $this->assertInstanceOf(MultiplesIterator::class, $multiplesIterator);
    }

    /** @test */
    public function checkIfMultiplesIteratorIsAInstanceOfItself()
    {
        $multiplesIterator = new MultiplesIterator(1, 100, [3 => 'Linio', 5 => 'IT', 15 => 'Linianos']);

        $this->assertInstanceOf(MultiplesIterator::class, $multiplesIterator);
    }
}
