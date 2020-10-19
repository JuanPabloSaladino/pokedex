<?php include_once "./BaseDeDatos.php" ?>
<?php include_once "./conexion.php" ?>

<?php include_once "./partials/header.php" ?>
<?php if (isset($_GET["tipoAlert"])) {
    include_once "./alert.php";
} ?>

<div class="main-container container-fluid pt-3 text-white">

    <?php
    if (isset($_SESSION["nombreUsuario"]) && $_SESSION["rol"] == "admin") {
        echo "<form class='mb-4' action='registrarPokemon.php' method='post'>";
        echo "<div class='form-row'>";
        echo "<div class='col-3'></div>";
        echo "<div class='col-6'>";
        echo "<input type='submit' class='form-control btn btn-success border-dark' value='Agregar un Pokemón'>";
        echo "</div>";
        echo "<div class='col-3'></div>";
        echo "</div>";
        echo "</form>";
    }
    ?>
    <form class="mb-4" action="buscarPokemon.php" method="post">
        <div class="form-row">
            <div class="col-8">
                <input type="text" class="form-control" placeholder="Ingrese nombre, tipo o número de Pokemón"
                       name="datoABuscarDePokemon">
            </div>
            <div class="col-4">
                <input type="submit" class="form-control btn btn-dark border-white" value="¿Qué Pokemón es?">
            </div>
        </div>
    </form>

    <h2 class="text-center mt-5 mb-3 text-dark">Lista de Pokemones</h2>

    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <table class="table table-hover table-bordered mt-4 mb-5 rounded table-info">
                <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">Imagen</th>
                    <th scope="col">Número</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Tipo</th>
                    <?php
                    if (isset($_SESSION["logueado"])) {
                        if ($_SESSION["logueado"] == 1) {
                            echo "<th scope='col'>Acciones</th>";
                        }
                    }
                    ?>
                </tr>
                </thead>
                <tbody>
                <?php
                if ($baseDeDatos->conexion->connect_error) {
                    echo "<h2 class='text-center'>Ha ocurrido un error con la conexión</h2>";
                } else {
                    $pokemones = $baseDeDatos->listar_pokemones();

                    foreach ($pokemones as $pokemon) {
                        echo "<tr class='text-center'>";
                        echo "<td><img src='./recursos/imagenes/pokemones/$pokemon[4]' alt='' width='100' height='100'></td>";
                        echo "<td>$pokemon[0]</td>";
                        echo "<td>$pokemon[1]</td>";
                        echo "<td><img src='./recursos/imagenes/tipos/$pokemon[2].png' alt='' ></td>";
                        if (isset($_SESSION["logueado"])) {
                            if ($_SESSION["logueado"] == 1) {
                                echo "<form action='alterPokemon.php' method='post'>";
                                echo "<td><button class='btn btn-warning border-white' value='$pokemon[0]' name='modificacion'>Modificación</button><button class='btn btn-danger border-white' value='$pokemon[0]' name='baja'>Baja</button></td>";
                                echo "</form>";
                            }
                        }
                        echo "</tr>";
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
        <div class="col-2"></div>
    </div>
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
