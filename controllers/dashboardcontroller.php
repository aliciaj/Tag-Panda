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
                    'title' => 'PANDA',
                    'description' => 'omg its a panda n stuff',
                    'date' => 'October 24th, 2014',
                    'url' => 'http://upload.wikimedia.org/wikipedia/commons/8/82/Giant_Panda_Tai_Shan.JPG',
                    'image' => 'http://upload.wikimedia.org/wikipedia/commons/8/82/Giant_Panda_Tai_Shan.JPG',
                    'bookmark_tags' => array(
                        array(
                            'tags1',
                            'taggy tagg',
                            'animal',
                            'goose'
                        )
                    )
                ),
                array(
                    'id' => '1',
                    'user_id' => '1',
                    'title' => 'this is a title',
                    'description' => 'this is a description for the second bookmark',
                    'date' => 'June 19th, 2013',
                    'url' => 'http://img.timeinc.net/time/photoessays/2011/panda_wolong/panda_wolong_01.jpg',
                    'image' => 'http://img.timeinc.net/time/photoessays/2011/panda_wolong/panda_wolong_01.jpg',
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
                    'user_id' => '1',
                    'name' => 'red pandas'
                ),
                array(
                    'id' => '1',
                    'user_id' => '1',
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