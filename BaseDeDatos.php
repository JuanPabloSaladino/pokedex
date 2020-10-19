<?php

class BaseDeDatos
{
    public $host;
    public $usuario;
    public $password;
    public $bd;
    public $conexion;

    public function __construct($host, $usuario, $password, $bd)
    {
        $this->host = $host;
        $this->usuario = $usuario;
        $this->password = $password;
        $this->bd = $bd;
        $this->conexion = new mysqli($this->host, $this->usuario, $this->password, $this->bd);
    }

    function insertar_pokemon($nombre, $tipo, $numero, $descripcion, $imagen)
    {
        $query = "insert into pokemon (nombre, tipo, numero, descripcion, imagen) VALUES ( '$nombre', '$tipo', '$numero', '$descripcion', '$imagen')";

        return $this->conexion->query($query);
    }

    function listar_pokemones()
    {

        $query = "select * from pokemon";

        return $this->conexion->query($query)->fetch_all();

    }

    function buscarPokemonPorNombre($nombreDePokemon)
    {

        $query = "SELECT DISTINCT * FROM pokemon WHERE nombre='$nombreDePokemon'";

        return $this->conexion->query($query)->fetch_assoc();

    }

    function buscarPokemonPorNumero($numeroDePokemon)
    {

        $query = "SELECT DISTINCT * FROM pokemon WHERE numero='$numeroDePokemon'";

        return $this->conexion->query($query)->fetch_assoc();

    }

    function buscarPokemonPorTipo($tipoDePokemon)
    {

        $query = "SELECT * FROM pokemon WHERE tipo='$tipoDePokemon'";

        return $this->conexion->query($query)->fetch_all();

    }

    function registrarUsuarioBDD($nombreUsuario, $passwordUsuario)
    {
        $query = "INSERT INTO usuario (username, password, rol) VALUES ( '$nombreUsuario', '$passwordUsuario', 'admin')";


        return $this->conexion->query($query);

    }

    function listarUsuariosRegistrados()
    {
        $query = "SELECT * FROM usuario";

        return $this->conexion->query($query)->fetch_all();
    }

    function buscarUsuarioPornombreDeUsuario($nombreUsuario)
    {

        $query = "SELECT * FROM usuario WHERE username = '$nombreUsuario'";

        return $this->conexion->query($query)->fetch_assoc();

    }

    function eliminarPokemonPorNumero($numeroDePokemon)
    {

        $query = "DELETE FROM pokemon WHERE numero = $numeroDePokemon";

        return $this->conexion->query($query);

    }

    function modificarDatosDePokemon($numeroDePokemon, $descripcionPokemon, $tipoPokemon)
    {

        $query = "UPDATE pokemon SET descripcion = '$descripcionPokemon', tipo = '$tipoPokemon' WHERE numero = '$numeroDePokemon'";

        return $this->conexion->query($query);

    }

}