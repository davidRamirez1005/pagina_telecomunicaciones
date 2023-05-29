<?php

$conexion = new PDO("mysql:host=localhost;dbname=formularioteleco2", "root", "");

if($_POST){

       $nombre = $_POST["nombre"];
       $apellido = $_POST["apellido"];
       $correo = $_POST["correo"];
       $telefono = $_POST["telefono"];
       $comentarios = $_POST["comentarios"];

       $query = $conexion -> prepare("INSERT INTO telecomunicaciones2 (id, nombre, apellido, correo, telefono, comentarios) VALUES (NULL, :nombre, :apellido, :correo, :telefono, :comentarios)");

       $query->bindValue(':nombre', $nombre);
       $query->bindValue(':apellido', $apellido);
       $query->bindValue(':correo', $correo);
       $query->bindValue(':telefono', $telefono);
       $query->bindValue(':comentarios', $comentarios);

       $query -> execute();

       header("Location: http://localhost/pagina_telecomunicaciones/html/formulario.php");
       exit(); 

}


?>