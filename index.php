<?php 
//phpinfo();
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Boostrap
ini_set('fastcgi.impersonate', 0);

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

///Users/abrooks/Sites/Tag-Panda/index.php
// should these be require instead of require_once? 
// Run Librarys automagically
function __autoload($className) {
// die(strtolower($className));
    clearstatcache();
    // is_readable instead of is_file ? 
    if (is_file(ROOT . DS . 'library' . DS . strtolower($className) . '.php')) {
        require(ROOT . DS . 'library' . DS . strtolower($className) . '.php');
    } else if (is_file(ROOT . DS . 'controllers' . DS . strtolower($className) . '.php')) {
        require(ROOT . DS . 'controllers' . DS . strtolower($className) . '.php');
    } else if (is_file(ROOT . DS . 'models' . DS . strtolower($className) . '.php')) {
        require(ROOT . DS . 'models' . DS . strtolower($className) . '.php');
    } else {
        require(ROOT . DS . 'controllers' . DS . strtolower($className) . '.php');
      /* Error Generation Code Here */
    }
}


// Get Urls  /users/view/person
//&& is_string($_GET['url']) && file_exists('controllers/'.$_GET['url'].'.php'))
if (isset($_GET['url']) ) {

    // this was all outside of the if 
    // echo $_GET['url']; 
    $url = $_GET['url']; // name in $_GET['url'] is ok, so you can set it
    $url = explode('/',$url);

    // Normalize Url
    $controller = ucwords($url[0]).'Controller';
    array_shift($url);
    $action = $url[0];

    if(!$action){
        $action = 'index';
    }
    array_shift($url);
    $queryString = $url;


    // Dispatch - make new version of controller 
    $dispatch = new $controller();

    // Call
    call_user_func_array(array($dispatch,$action),$queryString);
    
}

?>