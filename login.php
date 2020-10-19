<?php

include_once "BaseDeDatos.php";
include_once "conexion.php";
include_once "funciones.php";

if (isset($_POST["nombreUsuario"]) && isset($_POST["passwordUsuario"])) {

    $nombreUsuario = $_POST["nombreUsuario"];
    md5($passwordUsuario = $_POST["passwordUsuario"]);

    $usuariosRegistrados = $baseDeDatos->listarUsuariosRegistrados();

    if (!is_null($usuarioEncontrado = $baseDeDatos->buscarUsuarioPornombreDeUsuario($nombreUsuario))) {
        if (md5($passwordUsuario) == $usuarioEncontrado["password"]) {
            session_start();
            $_SESSION["logueado"] = 1;
            $_SESSION["nombreUsuario"] = $nombreUsuario;
            $_SESSION["rol"] = $usuarioEncontrado["rol"];
            header("Location: index.php?tipoAlert=success&mensajeAlert=Hola, $nombreUsuario!");
        } else {
            header("Location: index.php?tipoAlert=danger&mensajeAlert=Error de login");
        }
    } else {
        header("Location: index.php?tipoAlert=danger&mensajeAlert=Error de login");
    }
}

