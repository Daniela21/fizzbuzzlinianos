<?php

namespace App;

abstract class ConvertString
{
    abstract public function convertToString();

    public function __toString()
    {
        return $this->convertToString();
    }
}