<?php
class DashboardController extends Controller{
    function index(){
        $params = array(
            'test' => '123',
            'user' => array(
                'username' => 'abrooks',
                'first_name' => 'alicia',
                'last_name' => 'brooks'
            ),
            'bookmarks' => array(
                array(
                    'id' => '1',
                    'url' => 'http://upload.wikimedia.org/wikipedia/commons/8/82/Giant_Panda_Tai_Shan.JPG',
                    'image_path' => 'http://upload.wikimedia.org/wikipedia/commons/8/82/Giant_Panda_Tai_Shan.JPG'
                ),
                array(
                    'id' => '1',
                    'url' => 'http://upload.wikimedia.org/wikipedia/commons/8/82/Giant_Panda_Tai_Shan.JPG',
                ),
            )

        );
        // $this->template="othertemplate";
        $this->_view('dashboard/index', $params);
    }

    // function add ()
    // add a book mark

}