<?php
include 'clases/conexion.php';
include 'clases/ciudad.php';

$objConexion = new Conexion();
$objCiudad = new Ciudad();

$conexion = $objConexion->conectar();
$ciudades = $objCiudad->consultar_ciudad($conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Acudiente</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<div class="container">
  <div class="row">
    <div class="col-sm">     
    </div>
    <div class="col-sm">
        <h1 class="font-italic text-center">REGISTRO</h1><br>
    <form action="controlador/registrar_acudiente.php"method="post">
    <!-- nombre -->
    <div class="form-group">
    <label for="">Nombre: </label>
    <input type="text" name="nombreAc" id="" class="form-control "><br>
    </div>
    <!-- apellido -->
    <div class="form-group">
    <label for="">Apellido: </label>
    <input type="text" name="apellidoAc" id="" class="form-control "><br>
    </div>    
    <!-- edad -->
    <div class="form-group">
    <label for="">edad: </label>
    <input type="text" name="edadAc" id="" class="form-control "><br>
    </div>
    <!-- telefono -->
    <div class="form-group">
    <label for="">Telefono: </label>
    <input type="text" name="telefono" id="" class="form-control "><br>
    </div>
    <!-- direccion -->
    <div class="form-group">
    <label for="">Direccion: </label>
    <input type="text" name="direccion" id="" class="form-control "><br>
    </div>
    <!-- ciudad -->
    <div class="form-group">
    <label for="">Ciudad: </label>
        <select name="ciudad" id="ciudad" class="form-control ">
            <?php
            while($ciudad = mysqli_fetch_array($ciudades)){
                ?>
                <option value="<?php echo $ciudad['id_ciudad']; ?>">
                <?php echo $ciudad['nombre_ciudad'] ?>
            </option>
                <?php
                }
            ?>
            </select><br><br>
    </div>
    <div class="text-center">
        <input type="submit" value="Registrar" class="btn btn-info"><br><br>
    </div>                       
    </form>      
    </div>
    <div class="col-sm">      
    </div>
  </div>
</div>    
    <div class="text-center">
        <a href="menu.html"><button type="submit" class="btn btn-light">Volver</button></a>
    </div>        
</body>
</html>