<?php include_once "./BaseDeDatos.php" ?>
<?php include_once "./conexion.php" ?>

<?php include_once "./partials/header.php" ?>
<div class="row">
    <div class="col"></div>
    <div class="col-5 bg-danger my-4 rounded">
        <h2 class="text-center mt-4 mb-5 text-white">Registrate</h2>
        <form class="text-center" action="registrarUsuario.php" method="post">
            <div class="form-group my-4">
                <label for="nombreUsuario">Nombre de usuario</label>
                <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" required="true">
            </div>
            <div class="form-group mt-5">
                <label for="passwordUsuario">Password</label>
                <input type="password" class="form-control" id="passwordUsuario" name="passwordUsuario" required="true">
            </div>
            <div class="form-group mb-5">
                <label for="repeticionPasswordUsuario">Repetí tu password</label>
                <input type="password" class="form-control" id="repeticionPasswordUsuario"
                       name="repeticionPasswordUsuario" required="true">
            </div>
            <button type="submit" class="btn btn-dark btn-block border-white my-5">Registrar</button>
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