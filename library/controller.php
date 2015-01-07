<?php
class Controller {

        // protected $_model;
        // protected $_controller;
        // protected $_action;
        // protected $_template;

        // function __construct($model, $controller, $action) {

        //     echo "hi";

        // }

    protected $template = 'default';


    function _view($file, $params){
        ob_start();
        foreach($params as $key => $value){
            $$key = $value;
        }
        include(ROOT.'/views/' . $file . '.php');
        
        $output = ob_get_contents();
        ob_end_clean();
        include(ROOT.'/views/templates/' . $this->template . '.html');
    }
}