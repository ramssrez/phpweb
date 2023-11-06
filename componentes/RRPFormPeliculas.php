        <div class="contenedor-table-crud">
            <div class="contenedor-crud">
                <h2>Registro de Pelicula</h2>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  method="post">
                    <div class="elemento">
                        <label for="name-pelicula">Nombre</label>
                        <input type="text" id="name-pelicula" name="name-pelicula">
                    </div>
                    <div class="elemento">
                        <label for="pais-pelicula">País</label>
                        <input type="text" id="pais-pelicula" name="pais-pelicula">
                    </div>
                    <div class="elemento">
                        <label for="sinopsis-pelicula">Sinopsis</label>
                        <textarea name="sinopsis-pelicula" id="sinopsis-pelicula" rows="5"></textarea>
                    </div>
                    <div class="elemento">
                        <label for="imagen-pelicula">Imagen</label>
                        <input type="text" id="imagen-pelicula" name="imagen-pelicula">
                    </div>
                    <div class="elemento">
                        <label for="year-pelicula">Año</label>
                        <input type="" id="year-pelicula" name="year-pelicula" >
                    </div>
                    <div class="elemento">
                        <label for="clasificacion-pelicula">Clasificación</label>
                        <input type="text" id="clasificacion-pelicula" name="clasificacion-pelicula">
                    </div>
                    <div class="elemento">
                        <label for="categoria-pelicula">Categoría</label>
                        <input type="text" id="categoria-pelicula" name="categoria-pelicula" >
                    </div>
                    <div class="elemento">
                        <label for="director-pelicula">Director</label>
                        <input type="text" id="director-pelicula" name="director-pelicula">
                    </div>
                    <div class="elemento">
                        <label for="actor-pelicula">Actor</label>
                        <input type="text" id="actor-pelicula" name="actor-pelicula" >
                    </div>
                    <?php
                        include("../config/validarCampos.php");
                    ?>
                    <div class="elemento">
                        <input id="btn-agregar" type="submit" value="Agregar" name= "submit-pelicula">
                    </div>
                </form>
            </div>
            <div class="table-crud">
                <h2>Lista de películas</h2>
                <table>
                    <thead>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>País</th>
                        <th>Año</th>
                        <th>Categoría</th>
                        <th>Director</th>
                        <th>Imagen</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Matilda</td>
                            <td>EUA</td>
                            <td>1995</td>
                            <td>Infantil</td>
                            <td>Nombre Director</td>
                            <td>Image pelicula</td>
                            <td>
                                <button id="btn-actualizar">Actualizar</button>
                            </td>
                            <td>
                                <button id="btn-eliminar">Eliminar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>