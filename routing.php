<?php
// www/routing.php
// This is for -s php5 version of mamp aka local set up

if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false;
} else {
    $_GET['url'] = substr($_SERVER['REQUEST_URI'],1);
    include __DIR__ . '/index.php';
}