<?php
require_once "../controller/listArea.php";
require_once "../controller/listRoles.php";
require_once "../controller/createEmpleado.php";
$area = new area();
$reg = $area->listArea();
$rol = new rol();
$reg1 = $rol->listRol();


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Prueba técnica DEV PHP </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/estilos.css">
</head>

<body>

    <section class="content">
        <div class="title">
            <h1>Crear empleado</h1>
            <br>
            <div class="alert alert-primary" role="alert">
                Los campos con (*) son obligatorios.
            </div>
        </div>
        <form method="post" action="">

            <div class="row">
                <div class="col-2">
                    <label for="exampleFormControlInput1" class="form-label">Nombre completo *</label>
                </div>
                <div class="col-10">
                    <input type="text" required class="form-control" name="nombre" id="nombre"
                        placeholder="Nombre completo del empleado">
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <label for="exampleInputEmail1" class="form-label">Correo electrónico *</label>
                </div>
                <div class="col-10">
                    <input type="email" required class="form-control" name="email" id="email"
                        placeholder="Correo electrónico">
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <label for="exampleInputEmail1" class="form-label">Sexo *</label>
                </div>
                <div class="col-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="M" name="sexo" id="sexo">
                        <label class="form-check-label" for="sexo">
                            Masculino
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="F" name="sexo" id="sexo">
                        <label class="form-check-label" for="sexo">
                            Femenino
                        </label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <label for="exampleInputEmail1" class="form-label">Área *</label>
                </div>
                <div class="col-10">
                    <select class="form-select" required name="area" aria-label="Default select example">
                        <option selected>--Seleccione su area --</option>
                        <?php foreach ($reg as $row): ?>
                            <option value="<?php echo $row['nombre']; ?>">
                                <?php echo $row['nombre']; ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <label for="exampleFormControlTextarea1" class="form-label">Descripción *</label>
                </div>
                <div class="col-10">
                    <textarea class="form-control" required name="descripcion" id="descripcion" rows="3"
                        placeholder="Descripción de la experiencia del empleado"></textarea>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="boletin" value="0" id="boletin">
                        <label class="form-check-label" for="boletin">
                            Deseo recibir boletín informativo
                        </label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <label for="exampleInputEmail1" class="form-label">Roles *</label>
                </div>
                <div class="col-10">
                    <?php foreach ($reg1 as $row1): ?>
                        <div class="form-check">

                            <input class="form-check-input" type="checkbox" name="roles" value="roles" id="roles">
                            <label class="form-check-label" for="roles">
                                <?php echo $row1['nombre']; ?>
                            </label>                       
                    </div>
                    <?php endforeach ?>
                </div>
            </div>

            <div class="row">
                <div class="col-2">

                </div>
                <div class="col-10">
                    <button class="btn btn-primary" name="submit" type="submit">Guardar</button>
                </div>
            </div>

        </form>
    </section>
</body>

</html>