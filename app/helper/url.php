<?php

function filter_url($str): string
{
    return htmlspecialchars(trim($str));
}

function get($name){
    if(isset($_GET[$name])){
        if(is_array($_GET[$name])){
            array_map(function ($item){
                return filter_url($item);
            }, $_GET[$name]);
        }

        return filter_url($_GET[$name]);
    }
    return false;
}

function post($name){
    if(isset($_POST[$name])){
        if(is_array($_POST[$name])){
            array_map(function ($item){
                return filter_url($item);
            }, $_POST[$name]);
        }

        return filter_url($_POST[$name]);
    }
    return false;
}