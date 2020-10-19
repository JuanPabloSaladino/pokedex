<?php

include_once "BaseDeDatos.php";
include_once "conexion.php";
include_once "Pokemon.php";
include_once "funciones.php";

if ($baseDeDatos->conexion->connect_error) {
    echo "<h2 class='text-center'>Ha ocurrido un error con la conexión</h2>";
} else {

    if (isset($_POST["datoABuscarDePokemon"])) {
        $datoABuscarDePokemon = ucfirst($_POST["datoABuscarDePokemon"]);

        $pokemones = $baseDeDatos->listar_pokemones();

        if (buscarNombreDePokemonEnBaseDeDatos($pokemones, $datoABuscarDePokemon)) {
            $numeroDePokemon = $baseDeDatos->buscarPokemonPorNombre($datoABuscarDePokemon)["numero"];
            header("Location: pokemonEncontrado.php?numeroDePokemon=$numeroDePokemon&tipoAlert=success&mensajeAlert=Pokemon encontrado");
        }

        if ((buscarNumeroDePokemonEnBaseDeDatos($pokemones, $datoABuscarDePokemon))) {
            $numeroDePokemon = $baseDeDatos->buscarPokemonPorNumero($datoABuscarDePokemon)["numero"];
            header("Location: pokemonEncontrado.php?numeroDePokemon=$numeroDePokemon&tipoAlert=success&mensajeAlert=Pokemon encontrado");
        }

        if (buscarTipoDePokemonEnBaseDeDatos($pokemones, $datoABuscarDePokemon)) {
            header("Location: tipoDePokemonEncontrado.php?tipoDePokemon=$datoABuscarDePokemon&tipoAlert=success&mensajeAlert=Tipo de Pokemon encontrado");
        }

        if (!(buscarNombreDePokemonEnBaseDeDatos($pokemones, $datoABuscarDePokemon) || (buscarNumeroDePokemonEnBaseDeDatos($pokemones, $datoABuscarDePokemon)) || (buscarTipoDePokemonEnBaseDeDatos($pokemones, $datoABuscarDePokemon)))) {
            header("Location: pokemonNoEncontrado.php?tipoAlert=danger&mensajeAlert=Pokemon no encontrado");
        }

    }
}

