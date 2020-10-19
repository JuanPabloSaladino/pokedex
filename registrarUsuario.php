<?php
include_once "./funciones.php";
include_once "./conexion.php";
include_once "./BaseDeDatos.php";

if (isset($_POST["nombreUsuario"]) && isset($_POST["passwordUsuario"]) && isset($_POST["repeticionPasswordUsuario"])) {

    $nombreUsuario = $_POST["nombreUsuario"];
    $passwordUsuario = md5($_POST["passwordUsuario"]);
    $repeticionPasswordUsuario = md5($_POST["repeticionPasswordUsuario"]);

    $usuariosRegistrados = $baseDeDatos->listarUsuariosRegistrados();

    if (sePuedeRegistrarUsuario($usuariosRegistrados, $nombreUsuario, $passwordUsuario, $repeticionPasswordUsuario)) {
        $baseDeDatos->registrarUsuarioBDD($nombreUsuario, $passwordUsuario);
        header("Location: index.php?tipoAlert=success&usuarioRegistrado=true&mensajeAlert=Usuario registrado");
    } else {
        header("Location: index.php?tipoAlert=danger&usuarioRegistrado=false&mensajeAlert=Error al registrar el usuario");
    }


}