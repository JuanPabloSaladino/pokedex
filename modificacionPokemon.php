<?php include_once "./BaseDeDatos.php" ?>
<?php include_once "./conexion.php" ?>

<?php include_once "./partials/header.php" ?>

<?php

if (isset($_GET["numeroDePokemon"])) {
    $numeroDePokemonABuscar = $_GET["numeroDePokemon"];
    $pokemonAModificar = $baseDeDatos->buscarPokemonPorNumero($numeroDePokemonABuscar);
}

?>

<div class="row">
    <div class="col"></div>
    <div class="col-5 bg-danger my-4 rounded">
        <h2 class="text-center mt-4 mb-5 text-white">Modificar Pokemón</h2>
        <form class="text-center" action="modificarPokemon.php" method="post">
            <div class="form-group my-4">
                <label for="nombrePokemon">Nombre</label>
                <input type="text" class="form-control" id="nombrePokemon" name="nombrePokemon" required="true"
                       value="<?php echo $pokemonAModificar["nombre"] ?>">
            </div>
            <div class="form-group my-4">
                <label for="tipoPokemon">Tipo</label>
                <select id="tipoPokemon" class="form-control" name="tipoPokemon[]" required="true">
                    <option value="Acero">Acero</option>
                    <option value="Agua">Agua</option>
                    <option value="Bicho">Bicho</option>
                    <option value="Dragon">Dragón</option>
                    <option value="Fantasma">Fantasma</option>
                    <option value="Fuego">Fuego</option>
                    <option value="Hada">Hada</option>
                    <option value="Hielo">Hielo</option>
                    <option value="Hierba">Hierba</option>
                    <option value="Lucha">Lucha</option>
                    <option value="Normal">Normal</option>
                    <option value="Roca">Roca</option>
                    <option value="Tierra">Tierra</option>
                    <option value="Psiquico">Psíquico</option>
                    <option value="Veneno">Veneno</option>
                    <option value="Volador">Volador</option>
                </select>
            </div>
            <div class="form-group my-4">
                <input type="hidden" class="form-control" id="numeroPokemon" name="numeroPokemon"
                       value="<?php echo $pokemonAModificar["numero"] ?>"
                >
            </div>
            <div class="form-group">
                <label for="descripcionPokemon">Descripción</label>
                <textarea class="form-control" id="descripcionPokemon" rows="7"
                          name="descripcionPokemon"><?php echo $pokemonAModificar["descripcion"] ?></textarea>
            </div>

            <button type="submit" class="btn btn-dark btn-block border-white my-5">Modificar</button>
        </form>
    </div>
    <div class="col"></div>
</div>

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
