<?php
    class Database {

        $db_host = "localhost";
        $db_username = "root";
        $db_pass = "";
        $db_name = "Tag-Panda";
        $pdo;

        function __construct() {

            $this->pdo = new PDO('mysql:host='.$this->$db_host.';dbname'.$this->$db_name, $this->$db_username, $this->$db_pass);

        }

        function queryDb($query) {
            // does this work - I have no idea.
            return $this->pdo->query($query, PDO::FETCH_ASSOC);
        }
    }
