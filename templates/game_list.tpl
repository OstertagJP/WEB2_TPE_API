{include file="templates/head.tpl"}
{include file="templates/header.tpl"}

<!-- lista de juegos -->
<table class="game-table">
    <tr>
        <th>Juegos</th>
        <th>Genero</th>
    </tr>
    {foreach from=$games item=$game}
        <tr>
            <td class="game-name">{$game->name_game}</td>
            <td class="game-name">{$game->name_genre}</td>
            <td><a class="game-link" href="{BASE_URL}juego/{$game->id_game}">Detalle</a></td>
            <td><a class="game-link" href="{BASE_URL}modificar_game/{$game->id_game}">Modificar</a></td>
            <td><a class="game-link" href="{BASE_URL}eliminar_game/{$game->id_game}">Eliminar</a></td>
        </tr>
    {/foreach}
</table>

<a class="game-link" href="{BASE_URL}add_game/{$game->id_game}">Cargar Juego</a>


{include file="templates/footer.tpl"}