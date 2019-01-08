<?php

require __DIR__ . '/../vendor/autoload.php';

function my_autoload($classname)
{
    $path = str_replace("\\", DIRECTORY_SEPARATOR, $classname);
    $file = __DIR__ . DIRECTORY_SEPARATOR . $path . ".php";
    if(file_exists($file)) {
        require_once $file;
    }
}

spl_autoload_register('my_autoload');

core\Route::start();