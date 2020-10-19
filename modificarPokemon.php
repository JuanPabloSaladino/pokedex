<?php

include_once "BaseDeDatos.php";
include_once "conexion.php";
include_once "funciones.php";

if ($baseDeDatos->conexion->connect_error) {
    echo "<h2 class='text-center'>Ha ocurrido un error con la conexión</h2>";
} else {

    session_start();
    if ($_SESSION["rol"] == "admin") {
        if (isset($_POST["nombrePokemon"]) && isset($_POST["tipoPokemon"]) && isset($_POST["numeroPokemon"]) && isset($_POST["descripcionPokemon"])) {
            $tipoPokemon = array();

            $nombrePokemon = ucfirst($_POST["nombrePokemon"]);
            $tipoPokemon = $_POST["tipoPokemon"];
            $numeroPokemon = $_POST["numeroPokemon"];
            $descripcionPokemon = $_POST["descripcionPokemon"];

            $baseDeDatos->modificarDatosDePokemon($numeroPokemon, $descripcionPokemon, $tipoPokemon[0]);
            header("Location: index.php?tipoAlert=success&mensajeAlert=Pokemon correctamente modificado");

        }
    } else {
        header("Location: index.php?tipoAlert=danger&pokemonRegistrado=false&mensajeAlert=No sos un admin");
    }


}

