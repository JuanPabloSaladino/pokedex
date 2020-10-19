<?php include_once "./BaseDeDatos.php" ?>
<?php include_once "./conexion.php" ?>

<?php include_once "./partials/header.php" ?>
<?php if (isset($_GET["tipoAlert"])) {
    include_once "./alert.php";
} ?>
<div class="container">
    <div class="card my-5 border border-dark">
        <div class="text-center my-3">
            <img <?php echo "src='./recursos/imagenes/pokemones/" . $pokemonEncontrado['imagen'] . "' alt='' width='250' height='auto' >" ?>
        </div>
        <div class="card-body">
            <h2 class="card-title text-center mb-3"><?php echo $pokemonEncontrado['nombre'] ?></h2>
            <p class="card-text text-justify my-5"><?php echo $pokemonEncontrado['descripcion'] ?></p>
        </div>
        <ul class="list-group list-group-flush text-center">
            <li class="list-group-item py-2 border">Número: <?php echo $pokemonEncontrado['numero'] ?></li>
            <li class="list-group-item py-2 border">
                <?php echo "<img src='./recursos/imagenes/tipos/" . $pokemonEncontrado['tipo'] . ".png' alt='' class='my-4 my-auto' height='50px'>"; ?></li>
        </ul>
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
