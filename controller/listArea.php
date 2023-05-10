<?php

require_once('../database/conexion.php');
class Area
{
    private $area;
    private $db;

    public function __construct()
    {
        $this->area = array();
        $this->db = new PDO('mysql:host=localhost;dbname=prueba_tecnica_dev', "root", "");
    }

    public function listArea()
    {


        $query = "SELECT nombre FROM areas";
        try {
            foreach ($this->db->query($query) as $res) {
                // $nomArea = $this->getArea($res.area_id);                 
                $this->area[] = $res;
            }
            return $this->area;
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }

    }
}
?>