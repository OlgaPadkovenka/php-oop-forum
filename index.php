<?php

// '/qwe?id=123'

$dir = '/php_m2i/php-oop-forum';

$url = explode('?', $_SERVER['REQUEST_URI'], 2)[0];
$url = substr($url, strlen($dir));

if ($url === '/') {
    $url = '/index';
}
$databaseHandler = new PDO('mysql:host=localhost;dbname=forum', 'root', 'root');
include "pages{$url}.php";
