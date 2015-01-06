<?php
class Controller {

        // protected $_model;
        // protected $_controller;
        // protected $_action;
        // protected $_template;

        // function __construct($model, $controller, $action) {

        //     echo "hi";

        // }

    function _view($file, $params){
        foreach($params as $key => $value){
            $$key = $value;
        }
        include(ROOT.'/views/' . $file . '.php');
    }
}