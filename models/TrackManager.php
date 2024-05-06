<?php
require '../config/MySQLConnector.php';

class TrackManager
{
    private $db;

    public function __construct()
    {
        $this->db = (new MySQLConnector())->getConnection();
    }

    public function getAllTracks()
    {

        $query = $this->db->query("SELECT * FROM track");
        return $query->fetchAll();
    }
}
