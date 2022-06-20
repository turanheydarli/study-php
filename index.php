<?php

require 'app/init.php';

$_url = get('url');

$_url = array_filter(explode('/',$_url));

if(!isset($_url[0])){
    $_url[0] = 'index';
}

if(!file_exists('app/controller/' . $_url[0] . '.php')) {
    $_url[0] = 'index';
}

echo $_url[0];