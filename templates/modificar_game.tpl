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
    <br>

    {* <label>GENERO:{$game->name_genre}</label> *}
    <br>
    <br>
    {* <select name="name_genre">
        <option>-- Seleccione --</option>
        {foreach from=$list_genre item=$genres}
            <option value="{$genres->name_genre}">{$genres->name_genre}</option>
        {/foreach}
    </select> *}

    <input type="submit" value="Actualizar">
</form>





{include file="templates/footer.tpl"}