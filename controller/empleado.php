<?php
require_once('../database/conexion.php');
class Empleado
{
    private $empleado;
    private $db;

    public function __construct()
    {
        $this->empleado = array();
        $this->db = new PDO('mysql:host=localhost;dbname=prueba_tecnica_dev', "root", "");
    }

    public function listEmpleados()
    {

        $query = "SELECT nombre, email, sexo, area_id, boletin FROM empleado";
        try {
            foreach ($this->db->query($query) as $res) {

                    // $idArea = $res['area_id'];
                    // $queryGetArea = "SELECT nombre FROM areas WHERE id = '$idArea'";
                    // $nomArea = $this->db->query($queryGetArea);
                    // $res['area_id']=$nomArea;
                
                          
                $this->empleado[] = $res;
                
            }
            return $this->empleado;
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }

    }


    public function deleteEmpleado($id)
    {

        $query = "DELETE FROM empleado WHERE id = ?";

        $res = $this->db->prepare($query);

        if ($res) {
            return true;
        } else {
            return false;
        }


    }

}

?>