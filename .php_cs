<?php
$header = <<<EOF
EOF;
return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules(array(
        '@Symfony' => true,
        //'header_comment' => array('header' => $header),
        'array_syntax' => array('syntax' => 'short'),
        'ordered_imports' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'php_unit_construct' => true,
        'php_unit_strict' => true,
        'yoda_style' => false,
    ))
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->notPath('app/Console/Kernel.php')
            ->notPath('app/Http/Kernel.php')
            ->exclude('bootstrap')
            ->exclude('config')
            ->exclude('database/factories')
            ->exclude('public')
            ->exclude('resources')
            ->exclude('storage')
            ->notPath('_ide_helper.php')
            ->in(__DIR__)
    )
;