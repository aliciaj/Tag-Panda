<?php 

// Boostrap

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

// Run Librarys automagically
function __autoload($className) {
// die(strtolower($className));
    clearstatcache();
    if (file_exists(ROOT . DS . 'library' . DS . strtolower($className) . '.php')) {
        require_once(ROOT . DS . 'library' . DS . strtolower($className) . '.php');
    } else if (file_exists(ROOT . DS . 'controllers' . DS . strtolower($className) . '.php')) {
        require_once(ROOT . DS . 'controllers' . DS . strtolower($className) . '.php');
    } else if (file_exists(ROOT . DS . 'models' . DS . strtolower($className) . '.php')) {
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
$action = $url[1];
$params = $url[2];

// Dispatch - make new version of controller 
$dispatch = new $controller();

// Call
call_user_func_array(array($dispatch,$action),$params);
?>