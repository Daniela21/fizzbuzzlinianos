<?php

namespace App\Factory;

use App\Output;

class MultiplesFactory
{
    protected $multiples = [];
    
    protected $linianosOutput;

    public function __construct(array $multiples = [])
    {
        $this->multiples = $multiples;
        krsort($this->multiples);
    }

    public function searchingTheMultiple(int $number): string
    {
        foreach ($this->multiples as $multiples => $word) {
            if ($this->module($number, $multiples)) {
                return $word;
            }
        }

        $value  = new Output($number);

        return $value->convertToString();
    }

    protected function module(int $number, int $multiples): int
    {
        return !($number % $multiples);
    }
}
