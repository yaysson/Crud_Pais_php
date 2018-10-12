<?php
include 'clases/conexion.php';
include 'clases/ciudad.php';
include 'clases/acudiente.php';

$objConexion = new Conexion();
$objCiudad = new Ciudad();
$objAcudiente = new Acudiente();

$conexion = $objConexion->conectar();
$ciudades = $objCiudad->consultar_ciudad($conexion);
$conexion = $objConexion->conectar();
$acudientes = $objAcudiente->consultar_acudiente($conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Estudiante</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm">      
    </div>
    <div class="col-sm">
    <h1 class="font-italic text-center">REGISTRO</h1><br>
    <form action="controlador/registrar_estudiante.php" method="post">
    <!--nombre-->
    <div class="form-group">
    <label for="">Nombre: </label>
    <input type="text" name="nombreEs" id="" class="form-control"><br>
    </div>
    <!--apellido-->
    <div class="form-group">
    <label for="">Apellido: </label>
    <input type="text" name="apellidoEs" id="" class="form-control"><br>
    </div>
    <!--edad-->
    <div class="form-group">
    <label for="">edad: </label>
    <input type="text" name="edadEs" id="" class="form-control"><br>
    </div>    
    <!--ciudad nacimiento-->
    <div class="form-group">
    <label for="">Ciudad Nacimiento: </label>
    <input type="text" name="ciudadNaci" id="" class="form-control"><br>
    </div> 
    <!--ciudad-->
    <div class="form-group">
    <label for="">Ciudad: </label>
        <select name="ciudad" id="ciudad" class="form-control">
            <?php
            while($ciudad = mysqli_fetch_array($ciudades)){
                ?>
                <option value="<?php echo $ciudad['id_ciudad']; ?>">
                <?php echo $ciudad['nombre_ciudad'] ?>
            </option>
                <?php
                }
            ?>
        </select><br>
    </div>
    <!--acudiente-->
    <div class="form-group">
    <label for="">Acudiente: </label>
        <select name="acudiente" id="acudiente" class="form-control">
            <?php
            while($acudiente = mysqli_fetch_array($acudientes)){
                ?>
                <option value="<?php echo $acudiente['id_acudiente']; ?>"> 
                <?php echo $acudiente['nombre_acudiente']," ", $acudiente['apellido_acudiente'] ?>
            </option>
                <?php
                }
            ?>
        </select><br>
    </div>
        <div class="text-center">
        <input type="submit" value="Registrar" class="btn btn-info"><br><br>
        </div>                
    </form>
    <div class="text-center">
    <a href="menu.html"><button type="submit" class="btn btn-light">Volver</button></a>
    </div>     
    </div>
    <div class="col-sm">    
    </div>
  </div>
</div>       
</body>
</html>