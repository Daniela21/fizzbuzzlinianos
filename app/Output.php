<?php

namespace App;

class Output extends ConvertString
{
    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function convertToString(): string
    {
        return $this->value;
    }
}
