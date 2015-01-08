<?php
class DashboardController extends Controller{
    function index(){
        $params = array(
            'test' => '123',
            'users' => array(
                array(
                    'id' => '1',
                    'username' => 'abrooks',
                    'first_name' => 'alicia',
                    'last_name' => 'brooks'
                ),
                array(
                    'id' => '1',
                    'username' => 'jdoe',
                    'first_name' => 'jane',
                    'last_name' => 'doe'
                ),
            ),
            'bookmarks' => array(
                array(
                    'id' => '1',
                    'user_id' => '1',
                    'url' => 'http://upload.wikimedia.org/wikipedia/commons/8/82/Giant_Panda_Tai_Shan.JPG',
                    'image' => 'http://upload.wikimedia.org/wikipedia/commons/8/82/Giant_Panda_Tai_Shan.JPG',
                    'bookmark_tags' => array(
                        array(
                            'id' => '1',
                            'id' => '2'
                        )
                    )
                ),
                array(
                    'id' => '1',
                    'user_id' => '1',
                    'url' => 'http://upload.wikimedia.org/wikipedia/commons/8/82/Giant_Panda_Tai_Shan.JPG',
                    'image' => 'http://upload.wikimedia.org/wikipedia/commons/8/82/Giant_Panda_Tai_Shan.JPG',
                    'bookmark_tags' => array(
                        array(
                            'id' => '1',
                            'id' => '2'
                        )
                    )
                ),
            ),
            'tags' => array(
                array(
                    'id' => '1',
                    'id' => '1',
                    'name' => 'red pandas'
                ),
                array(
                    'id' => '1',
                    'id' => '1',
                    'name' => 'broncos'
                )
            )

        );
        // $this->template="othertemplate";
        $this->_view('dashboard/index', $params);
    }

    // function add ()
    // add a book mark

}