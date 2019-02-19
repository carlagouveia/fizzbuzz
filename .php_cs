<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/src')
    ->in(__DIR__ . '/tests');

return PhpCsFixer\Config::create()
    ->setRules([
        '@Symfony' => true,
    ])
    ->setFinder($finder)
    ->setUsingCache(true)
    ->setRiskyAllowed(true);
