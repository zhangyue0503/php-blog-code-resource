<?php

spl_autoload_register(function ($class) {
    $vendor = __DIR__  . '/myvendor';
    $file = $vendor . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

use Test\TestClass;
use CaseModel\CaseChild\CaseClass;

$t = new TestClass();
$t->show();

$c = new CaseClass();
$c->show();