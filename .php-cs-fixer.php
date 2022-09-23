<?php

return (new PhpCsFixer\Config())
    ->setFinder(
        (new PhpCsFixer\Finder())
            ->in([
                getcwd().'/src',
                getcwd().'/tests',
            ])
    )
    ->setRules([
        '@PSR12' => true,
        '@Symfony' => true,
    ]);
