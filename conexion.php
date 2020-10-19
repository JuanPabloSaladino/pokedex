<?php

include_once "BaseDeDatos.php";

$archivoConfig = "./recursos/config.ini";
$configuracion = parse_ini_file($archivoConfig, true);

$host = $configuracion["bd"]["host"];
$usuario = $configuracion["bd"]["usuario"];
$password = $configuracion["bd"]["password"];
$bd = $configuracion["bd"]["bd"];

$baseDeDatos = new BaseDeDatos($host, $usuario, $password, $bd);