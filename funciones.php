<?php

include_once "conexion.php";
include_once "BaseDeDatos.php";

function verificarSiUnPokemonYaFueIngresado($arrayDePokemones, $nombreDePokemon, $numeroDePokemon)
{

    $nombresDePokemones = array();
    $numerosDePokemones = array();
    $estaPokemonEnArray = false;

    foreach ($arrayDePokemones as $pokemon) {
        array_push($nombresDePokemones, $pokemon[1]);
        array_push($numerosDePokemones, $pokemon[0]);
    }

    if (in_array($numeroDePokemon, $numerosDePokemones)) {
        $estaPokemonEnArray = true;
    }

    if (in_array($nombreDePokemon, $nombresDePokemones)) {
        $estaPokemonEnArray = true;
    }

    return $estaPokemonEnArray;
}

function buscarNombreDePokemonEnBaseDeDatos($arrayDePokemones, $nombreDePokemon)
{

    $nombresDePokemones = array();
    $estaPokemonEnArray = false;

    foreach ($arrayDePokemones as $pokemon) {
        array_push($nombresDePokemones, $pokemon[1]);
    }

    if (in_array($nombreDePokemon, $nombresDePokemones)) {
        $estaPokemonEnArray = true;
    }

    return $estaPokemonEnArray;
}

function buscarNumeroDePokemonEnBaseDeDatos($arrayDePokemones, $numeroDePokemon)
{

    $numerosDePokemones = array();
    $estaPokemonEnArray = false;

    foreach ($arrayDePokemones as $pokemon) {
        array_push($numerosDePokemones, $pokemon[0]);
    }

    if (in_array($numeroDePokemon, $numerosDePokemones)) {
        $estaPokemonEnArray = true;
    }

    return $estaPokemonEnArray;
}

function buscarTipoDePokemonEnBaseDeDatos($arrayDePokemones, $tipoDePokemon)
{

    $tiposDePokemones = array();
    $estaTipoDePokemonEnArray = false;

    foreach ($arrayDePokemones as $pokemon) {
        array_push($tiposDePokemones, $pokemon[2]);
    }

    if (in_array($tipoDePokemon, $tiposDePokemones)) {
        $estaTipoDePokemonEnArray = true;
    }

    return $estaTipoDePokemonEnArray;
}

function validarSiPasswordsSonIguales($passwordUsuario, $repeticionPasswordUsuario)
{
    if ($passwordUsuario == $repeticionPasswordUsuario) {
        return true;
    }
}

function validarSiNombreDeUsuarioFueRegistrado($usuariosRegistrados, $nombreUsuario)
{
    $nombresUsuariosRegistrados = array();

    foreach ($usuariosRegistrados as $usuario) {
        array_push($nombresUsuariosRegistrados, $usuario[1]);
    }

    if (in_array($nombreUsuario, $nombresUsuariosRegistrados)) {
        return true;
    } else {
        return false;
    }
}

function sePuedeRegistrarUsuario($usuariosRegistrados, $nombreUsuario, $passwordUsuario, $repeticionPasswordUsuario)
{
    if (!validarSiNombreDeUsuarioFueRegistrado($usuariosRegistrados, $nombreUsuario) && validarSiPasswordsSonIguales($passwordUsuario, $repeticionPasswordUsuario)) {
        return true;
    } else {
        return false;
    }
}

function verificarSiPasswordEsCorrecto()
{

}

function verificarSiNombreDeUsuarioEstaRegistrado($usuariosRegistrados, $nombreUsuario)
{
    $nombresDeUsuariosRegistrados = array();

    foreach ($usuariosRegistrados as $usuarioRegistrado) {
        array_push($nombresDeUsuariosRegistrados, $usuarioRegistrado[1]);
    }

    if (in_array($nombreUsuario, $nombresDeUsuariosRegistrados)) {
        return true;
    } else {
        return false;
    }

}