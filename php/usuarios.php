<?php
include("./conexion.php");

if(isset($_POST['usuarios'])) {

if(
    strlen($_POST['usuario'])>= 1 &&
    strlen($_POST['password'])>= 1 &&
 
) {

    $usuario = trim($_POST['usuario']);
    $password = trim($_POST['password']);
    $fecha = date("d/m/y");
    $consulta = "INSERT INTO usuarios(idusuarios, nombre, correo, usuario, Password, fecha)
                VALUES ('$name', '$fullname', '$email', '$phone', '$asunto', '$message', '$fecha')";
    $resultado =mysqli_query($conex, $consulta);
    if($resultado) {
        ?>

            <h3 class="success">Tu registro se ha completado</h3>                                
        <?php
  } else {
    ?>
    <h3 class="error">Ocurrio un error</h3>
    <?php
   }
} else {
    ?><h3 class="error">Diligencia todos los campos</h3>
    <?php
}

  }

?>