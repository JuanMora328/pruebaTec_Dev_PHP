<?php

require_once('../database/conexion.php');
class Rol
{
    private $rol;
    private $db;

    public function __construct()
    {
        $this->rol = array();
        $this->db = new PDO('mysql:host=localhost;dbname=prueba_tecnica_dev', "root", "");
    }

    public function listRol()
    {


        $query = "SELECT nombre FROM roles";
        try {
            foreach ($this->db->query($query) as $res) {
                // $nomArea = $this->getArea($res.area_id);                 
                $this->rol[] = $res;
            }
            return $this->rol;
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }

    }
}
?>