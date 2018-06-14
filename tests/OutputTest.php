<?php

use App\Output;

class OutputTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function checkIfConvertToStringTheArgument()
    {
        $value = new Output(5);

        $result = $value->convertToString();

        $this->assertInternalType('string', $result);
        $this->assertNotEmpty($value);
    }
}
