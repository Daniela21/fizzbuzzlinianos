<?php

$finder = PhpCsFixer\Finder::create()->in(__DIR__ . '/app')->in(__DIR__ . '/tests');

return PhpCsFixer\Config::create()
    ->setRules([
        'array_syntax' => ['syntax' => 'short'],
        'concat_space' => ['spacing' => 'one']
    ])
    ->setFinder($finder);
