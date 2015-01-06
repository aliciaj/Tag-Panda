<?php
class DashboardController extends Controller{
    function index(){
        $params = array(
            'test' => '123'
        );
        $this->_view('dashboard/index', $params);
    }
}