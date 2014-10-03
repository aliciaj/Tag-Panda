<?php 
//phpinfo();
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Boostrap
ini_set('fastcgi.impersonate', 0);

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

///Users/abrooks/Sites/Tag-Panda/index.php
//
// Run Librarys automagically
function __autoload($className) {
// die(strtolower($className));
    clearstatcache();
    if (is_file(ROOT . DS . 'library' . DS . strtolower($className) . '.php')) {
        require_once(ROOT . DS . 'library' . DS . strtolower($className) . '.php');
    } else if (is_file(ROOT . DS . 'controllers' . DS . strtolower($className) . '.php')) {
        require_once(ROOT . DS . 'controllers' . DS . strtolower($className) . '.php');
    } else if (is_file(ROOT . DS . 'models' . DS . strtolower($className) . '.php')) {
        require_once(ROOT . DS . 'models' . DS . strtolower($className) . '.php');
    } else {
        require_once(ROOT . DS . 'controllers' . DS . strtolower($className) . '.php');
      /* Error Generation Code Here */
    }
}

// Get Urls  /users/view/person
$url = $_GET['url'];
$url = explode('/',$url);

// Normalize Url
$controller = ucwords($url[0]).'Controller';
array_shift($url);
$action = $url[0];
array_shift($url);
$queryString = $url;
// Dispatch - make new version of controller 
$dispatch = new $controller();

// Call
call_user_func_array(array($dispatch,$action),$queryString);
?>