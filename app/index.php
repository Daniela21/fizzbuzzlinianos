<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Iterator\MultiplesIterator;

foreach (new MultiplesIterator(1, 100, [3 => 'Linio', 5 => 'IT', 15 => 'Linianos']) as $value) {
    echo $value . "\n";
}
