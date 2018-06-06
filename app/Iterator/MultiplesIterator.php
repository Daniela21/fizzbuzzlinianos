<?php

namespace App\Iterator;

use App\Factory\MultiplesFactory;
use Iterator;

class MultiplesIterator implements Iterator
{
    private $from;
    private $to;
    private $number;
    private $factory;

    public function __construct($from, $to, $multiples)
    {
        $this->from = $from;
        $this->to = $to;
        $this->factory = new MultiplesFactory($multiples);
    }

    public function current(): string
    {
        return $this->factory->searchingTheMultiple($this->number);
    }

    public function rewind(): void
    {
        $this->number = $this->from;
    }

    public function key(): mixed
    {
        return null;
    }

    public function next(): void
    {
        ++$this->number;
    }

    public function valid(): int
    {
        return $this->number <= $this->to;
    }
}
