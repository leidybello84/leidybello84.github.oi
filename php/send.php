<?php
include("conexion.php");

if(isset($_POST['send'])) {

if(
    strlen($_POST['name'])>= 1 &&
    strlen($_POST['fullname'])>= 1 &&
    strlen($_POST['email'])>= 1 &&
    strlen($_POST['phone'])>= 1 &&
    strlen($_POST['asunto'])>= 1 &&
    strlen($_POST['message'])>= 1
) {

    $name = trim($_POST['name']);
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $asunto = trim($_POST['asunto']);
    $message = trim($_POST['message']);
    $fecha = date("d/m/y");
    $consulta = "INSERT INTO solicitudes(nombre, apellido, email, telefono, asunto, mensaje, fecha)
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