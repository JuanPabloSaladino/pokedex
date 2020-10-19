<?php

include_once "BaseDeDatos.php";
include_once "conexion.php";
include_once "funciones.php";
include_once "./partials/header.php";

if (isset($_SESSION["rol"])) {
    if ($_SESSION["rol"] == "admin") {
        include_once "./partials/registroPokemon.php";
    } else {
        echo "<div class='text-center my-5 text-danger'>";
        echo "<h1 class='text-center my-5 text-danger'>Sólo los admins pueden registrar Pokemones</h1>";
        echo "<img src='./recursos/imagenes/snorlax_error.png' alt='error'>";
        echo "</div>";
        session_destroy();
    }
} else {
    echo "<div class='text-center my-5 text-danger'>";
    echo "<h1 class='text-center my-5 text-danger'>Sólo los admins pueden registrar Pokemones</h1>";
    echo "<img src='./recursos/imagenes/snorlax_error.png' alt='error'>";
    echo "</div>";
    session_destroy();
}

?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>
</html>