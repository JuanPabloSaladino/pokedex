<?php

include_once "BaseDeDatos.php";
include_once "conexion.php";
include_once "funciones.php";

if ($baseDeDatos->conexion->connect_error) {
    echo "<h2 class='text-center'>Ha ocurrido un error con la conexión</h2>";
} else {

    session_start();
    if ($_SESSION["rol"] == "admin") {
        if (isset($_POST["nombrePokemon"]) && isset($_POST["tipoPokemon"]) && isset($_POST["numeroPokemon"]) && isset($_POST["descripcionPokemon"]) && isset($_FILES["imagenPokemon"])) {
            $tipoPokemon = array();

            $nombrePokemon = ucfirst($_POST["nombrePokemon"]);
            $tipoPokemon = $_POST["tipoPokemon"];
            $numeroPokemon = $_POST["numeroPokemon"];
            $descripcionPokemon = $_POST["descripcionPokemon"];
            $imagenPokemon = $_FILES["imagenPokemon"];

            $pokemones = $baseDeDatos->listar_pokemones();

            if (!verificarSiUnPokemonYaFueIngresado($pokemones, $nombrePokemon, $numeroPokemon)) {

                if ($_FILES["imagenPokemon"]["error"] <= 0) {

                    $destination = "./recursos/imagenes/pokemones/" . $_FILES["imagenPokemon"]["name"];
                    move_uploaded_file(
                        $_FILES["imagenPokemon"]["tmp_name"], $destination
                    );
                    $baseDeDatos->insertar_pokemon($nombrePokemon, $tipoPokemon[0], $numeroPokemon, $descripcionPokemon, $imagenPokemon["name"]);
                    header("Location: index.php?tipoAlert=success&pokemonRegistrado=true&mensajeAlert=Pokemon correctamente agregado");
                }

            } else {
                header("Location: index.php?tipoAlert=danger&pokemonRegistrado=false&mensajeAlert=Este Pokemon ya fue ingresado");
            }

        }
    } else {
        header("Location: index.php?tipoAlert=danger&pokemonRegistrado=false&mensajeAlert=No sos un admin");
    }


}

