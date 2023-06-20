<div>
    <form class="update-form" action="{BASE_URL}add_game/" method="POST">
        <br>
        <br>
        <h2>Agregar juego nuevo</h2>         
        
        <label>Nombre:</label>
        <input type="text" id="name_game" name="name_game" value="" required>
        <br>

        <label>Descripcion:</label>
        <textarea id="description_game" name="description_game" required></textarea>
        <br>

        <label>Genero:</label>
        <select name="genre_game" id="genre_game" required>
            <option> Seleccione un genero </option>
            {foreach $list_genre item=genre}
                <option value="{$genre.name_genre}">{$genre.name_genre}</option>
            {/foreach}
        </select>
        <br>
        <br>
        
        <input type="submit" value="Agregar">
    </form>

</div>


