<?php
class Model extends Database {

        $table;


        public $string;
 
        public function __construct(){
            $this->string = “MVC + PHP = Awesome, click here!”;
        }


        // find 
        // select all from table
        function find($id){
            // select all from table where id = id 

        }

        // find all 
        function findAll(){
            // select all from table
            $sql = 'SELECT * FROM $table';
            $query = $this->db->prepare($sql);
            $query->execute();
            return $query->fetchAll();

            queryDb($this->$sql);
        }
        // select 
    }
}
