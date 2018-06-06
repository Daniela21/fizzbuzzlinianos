<?php

use App\Output;

class OutputTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function checkIfConvertToStringTheArgument()
    {
        $value = new Output;

        $result = $value->convertToString(5);

        $this->assertInternalType('string', $result);
        $this->assertNotEmpty($result);
    }
}
