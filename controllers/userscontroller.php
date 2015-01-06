<?php
class UsersController extends Controller{
    function view($id){
        $params = array(
            'id' => $id,
            'test' => '123'
        );
        $this->_view('users/view', $params);
    }

    function findAll(){

    }
}