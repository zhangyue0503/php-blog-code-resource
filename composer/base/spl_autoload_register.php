<?php

spl_autoload_register(function( $className ){
    echo "first==>\n";
   require_once 'TestClass.php';
});

spl_autoload_register('CaseAutoLoad');

function CaseAutoLoad( $className ){
    echo "second==>\n";
    require_once 'CaseClass.php';
}

$m = new TestClass();
$m->show();

echo "--------\n";

$s = new CaseClass();
$s->show();

