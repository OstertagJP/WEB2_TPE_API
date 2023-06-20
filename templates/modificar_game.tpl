{include file="templates/head.tpl"}
{include file="templates/header.tpl"}

<!-- lista de juegos -->
{* <form class="update-form">
        <label for="name_game">Name Game:</label>
        <input type="text" id="name_game" name="name_game" value="{$game->name_game}" required>
        <br>

        <label for="description_game">Description Game:</label>
        <input id="description_game" name="description_game" value="{$game->description_game}" required>
        <br>


        <a href="{BASE_URL}actualizar_game/"><input type="submit" value="Actualizar"></a>
    </form> *}


<form class="update-form" action="{BASE_URL}actualizar_game/{$game->id_game}" method="POST">
    <label for="name_game">Name Game:</label>
    <input type="text" id="name_game" name="name_game" value="{$game->name_game}" required>
    <br>

    <label for="description_game">Description Game:</label>
    <textarea id="description_game" name="description_game" required>{$game->description_game}</textarea>
    {* <br>

    <label for="name_genre">Genre:</label>
    <br>
    <select name="name_genre">
    {foreach from=$game item=$genre}
        <option value="name_genre">{$genre->name_game}</option>
        <option value="name_genre">{$genre->name_game}</option>
        <option value="name_genre">{$genre->name_game}</option>
        <option value="name_genre">{$genre->name_game}</option>
    </select> *}

    <input type="submit" value="Actualizar">

    {* <a href="{BASE_URL}actualizar_game/{$game->id_game}">Actualizar</a> *}
    {* <a href="{BASE_URL}juego/{$game->id_game}">Detalle</a> *}
</form>





{include file="templates/footer.tpl"}