<?php

include "./conexion.php";

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1 ) {
   $nombre = trim($_POST['nombre']);
   $apellido = trim($_POST['apellido']);
   $correo = trim($_POST['correo']);
   $telefono = trim($_POST['telefono']);
   $comentarios = trim($_POST['comentarios']);
   $consulta = "INSERT INTO telecomunicaciones2(nombre,apellido,correo,telefono,comentarios) VALUES ('$nombre','$apellido','$correo','$telefono','$comentarios')";
   $resultado = mysqli_query($conex,$consulta);
   if ($resultado) {
    ?>
    <h3 >¡Te has registrado correctamente!</h3>
           <?php
   } else {
    ?>
    <h3 >¡Ups ha ocurrido un error!</h3>
           <?php
   }
    }   else {
    ?>
    <h3>¡Por favor complete los campos!</h3>
           <?php
    }
}



?>