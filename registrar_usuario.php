<?php
$sevidor = "localhost";
$usuario = "root";
$contraseña = "12345";
$BaseDatos = "base_encuesta";
$conexion = new mysqli($sevidor, $usuario, $contraseña, $BaseDatos);
$query =  $conexion->prepare("insert into usuario (usuario, nombre, contraseña, email, telefono, direccion, id_rol) values(?, ?, ?, ?, ?, ?, ?)");
$query->bind_param("ssssssi", $_POST["usuario"], $_POST["nombre"], md5($_POST["contraseña"]), $_POST["email"], $_POST["telefono"], $_POST["direccion"], $_POST["id_rol"]);
$query->execute();
header("Location: iniciar_sesion.html");
?>