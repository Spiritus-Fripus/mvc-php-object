<?php
require '../config/MySQLConnector.php';

class AlbumManager
{
    private $db;

    public function __construct()
    {
        $this->db = (new MySQLConnector())->getConnection();
    }

    function getAllAlbum()
    {
        $query = $this->db->query("SELECT * FROM album");
        return $query->fetchAll();
    }
}
