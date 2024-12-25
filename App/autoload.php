<?php

spl_autoload_register(function ($class)
{
    $file = str_replace('\\', '/', __DIR__ . '/../' . $class . '.php');
    include $file;
});

require __DIR__ . '/../vendor/autoload.php';
