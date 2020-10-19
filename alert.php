<div class="alert <?php echo "alert-" . $_GET['tipoAlert'] ?> alert-dismissible fade show my-2" role="alert">
    <h5 class="text-center my-auto">
        <?php

        if (isset($_GET['tipoAlert']) && isset($_GET["mensajeAlert"])) {
            echo $_GET["mensajeAlert"];

            if (isset($_GET["numeroDePokemon"])) {
                $numeroDePokemonEncontrado = $_GET["numeroDePokemon"];
                $pokemonEncontrado = $baseDeDatos->buscarPokemonPorNumero($numeroDePokemonEncontrado);
            }

            if (isset($_GET["tipoDePokemon"])) {
                $tipoDePokemonEncontrado = $_GET["tipoDePokemon"];
                $pokemonesPertenecientesAlTipoEncontrado = $baseDeDatos->buscarPokemonPorTipo($tipoDePokemonEncontrado);
            }
        }

        ?>
    </h5>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
