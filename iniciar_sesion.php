<?php
$sevidor = "localhost";
$usuario = "root";
$contraseña = "12345";
$BaseDatos = "base_encuesta";
$conexion = new mysqli($sevidor, $usuario, $contraseña, $BaseDatos);
$query = "select * from usuario where email = '".$_POST["email"]."' and contraseña = '".md5($_POST["contraseña"])."'";
$resultado= $conexion->query($query);
if($resultado->num_rows == 0)
{
    echo "Usuario o contraseña incorrectos";
    return;
}
session_start();
$arreglo = $resultado->fetch_assoc();
$_SESSION["email"] = $_POST["email"];
$_SESSION["id"] = $arreglo["id_usuario"];
$_SESSION["usuario"] = $arreglo["usuario"];
$_SESSION["telefono"] = $arreglo["telefono"];
$_SESSION["direccion"] = $arreglo["direccion"];
$_SESSION["id_rol"] = $arreglo["id_rol"];
$_SESSION["nombre"] = $arreglo["nombre"];
echo "TRUE";
?>