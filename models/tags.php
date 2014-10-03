<?php
class Tags extends Model {
    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getAllTags() {
        // return $this->db->query('SELECT * FROM Tags');
    }
}