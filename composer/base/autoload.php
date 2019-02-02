<?php 


$m = new TestClass();
$m->show();

function __autoload($className){
    require $className . '.php';
}