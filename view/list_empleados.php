<?php
require_once "../controller/empleado.php";
$empleado = new empleado;
$reg = $empleado->listEmpleados();
if($reg){
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title> Prueba técnica DEV PHP - Lista </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/7c8b32bf6f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styles/estilos.css">
</head>

<body>

  <section class="content">

    <div class="title">
      <h1>Lista empleados</h1>
    </div>

    <div class="d-flex align-items-end flex-column bd-highlight mb-3">
      <button class="btn btn-primary" onclick="window.location.href='../view/create_empleado.php'" type="submit">Crear</button>
    </div>

    <table class="table">

      <thead>
        <tr>
          <th scope="col"> <i class="fa-solid fa-user"></i> Nombre</th>
          <th scope="col"> <i class="fa-solid fa-at"></i> Email</th>
          <th scope="col"> <i class="fa-solid fa-venus-mars"></i> Sexo</th>
          <th scope="col"> <i class="fa-solid fa-briefcase"></i> Área</th>
          <th scope="col"> <i class="fa-solid fa-envelope"></i> Boletín</th>
          <th scope="col"> Modificar</th>
          <th scope="col"> Eliminar</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($reg as $row): ?>
        <tr>
          <td><?php echo $row['nombre']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['sexo']; ?></td>
          <td><?php echo $row['area_id'] ?? null; ?></td>
          <?php 
          $bolFinal;
          if($row['boletin']==1){
            $bolFinal = 'Si';
          }else{
            $bolFinal = 'No';
          }
          ?>
          <td><?php echo $bolFinal; ?></td>
          <td><i class="fa-solid fa-pen-to-square"></i></td>
          <td><i class="fa-solid fa-trash"></i></td> 
        </tr>
        <?php
        endforeach
        ?>
      </tbody>
    </table>

  </section>
</body>

</html>
<?php
}else{
  echo "no existen registros";
}
?>



