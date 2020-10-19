<div class="row">
    <div class="col"></div>
    <div class="col-5 bg-danger my-4 rounded">
        <h2 class="text-center mt-4 mb-5 text-white">Ingresar Pokemón</h2>
        <form class="text-center" action="ingresarNuevoPokemon.php" method="post" enctype="multipart/form-data">
            <div class="form-group my-4">
                <label for="nombrePokemon">Nombre</label>
                <input type="text" class="form-control" id="nombrePokemon" name="nombrePokemon" required="true">
            </div>
            <div class="form-group my-4">
                <label for="tipoPokemon">Tipo</label>
                <select id="tipoPokemon" class="form-control" name="tipoPokemon[]" required="true">
                    <option value="Acero">Acero</option>
                    <option value="Agua">Agua</option>
                    <option value="Bicho">Bicho</option>
                    <option value="Dragon">Dragón</option>
                    <option value="Electrico">Eléctrico</option>
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
                <label for="numeroPokemon">Número</label>
                <input type="number" class="form-control" id="numeroPokemon" name="numeroPokemon" min="1"
                       required="true">
            </div>
            <div class="form-group">
                <label for="descripcionPokemon">Descripción</label>
                <textarea class="form-control" id="descripcionPokemon" rows="7" name="descripcionPokemon"></textarea>
            </div>
            <div class="form-group">
                <input type="file" class="form-control-file" name="imagenPokemon">
            </div>

            <button type="submit" class="btn btn-dark btn-block border-white my-5">Ingresar</button>
        </form>
    </div>
    <div class="col"></div>
</div>