<?php

include_once "BaseDeDatos.php";
include_once "conexion.php";

if (isset($_POST["baja"])) {
    $numeroDePokemon = $_POST["baja"];
    $baseDeDatos->eliminarPokemonPorNumero($numeroDePokemon);
    header("Location: index.php?tipoAlert=success&mensajeAlert=Pokemon eliminado correctamente");
}
if (isset($_POST["modificacion"])) {
    $numeroDePokemon = $_POST["modificacion"];
    header("Location: modificacionPokemon.php?numeroDePokemon=$numeroDePokemon");
}