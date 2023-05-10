<?php
require_once('../database/conexion.php');

$conexion= new mysqli('localhost','root','','prueba_tecnica_dev');

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $area = $_POST['area'];
    $boletin = $_POST['boletin'] ?? null;
    $descripcion = $_POST['descripcion'];
    $roles = $_POST['roles'];

    if ($boletin == null) {
        $boletin = 0;
    } else {
        $boletin = 1;
    }
    
    
    $queryGetArea = "SELECT id FROM areas WHERE nombre = '$area'";
    $objArea = mysqli_query($conexion,$queryGetArea);
    $justArea = mysqli_fetch_row($objArea);
    $idArea = $justArea[0];
    

    $query = "INSERT INTO empleado (nombre, email, sexo, area_id, boletin, descripcion) VALUES ('$nombre', '$email', '$sexo', $idArea, $boletin, '$descripcion')";
    
    $result = mysqli_query($conexion, $query);
    if (!$result) {
        die("falló la Query 1.");
    } else {
        $idEmpleado = mysqli_insert_id($conexion);

        foreach ($roles as $row):

            $queryGetRol = "SELECT id FROM roles WHERE nombre = '$row'";
            $objRol = mysqli_query($conexion, $queryGetRol);
            $justRol = mysqli_fetch_row($objRol);
            $idRol = $justRol[0];

            $queryRol = "INSERT INTO empleado_rol (empleado_id, rol_id) VALUES ('$idEmpleado','$idRol')";
            $resultRol = mysqli_query($conexion, $queryRol);
            if(!$resultRol){
                die("falló la Query 2.");
            }else{
                echo("Rol del empleado creado con exito");
            }
        endforeach;
    }
    header('Location: ../view/list_empleados.php');

}

?>