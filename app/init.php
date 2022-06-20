<?php

spl_autoload_register(function ($class_name){
    $class_file = __DIR__ . '/' . 'classes/' . strtolower($class_name) . '.class.php';

    if(file_exists($class_file)){
        require $class_file;
    }
});

Helper::Load();