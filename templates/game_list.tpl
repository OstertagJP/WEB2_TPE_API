{include file="templates/head.tpl"}
{include file="templates/header.tpl"}

<!-- lista de juegos -->
<table class="game-table">
    <tr>
        <th>Nombre del juego</th>
    </tr>
    {foreach from=$games item=$game}
        <tr>
            <td class="game-name">{$game->name_game}</td>
            <td><a class="game-link" href="{BASE_URL}juego/{$game->id_game}">Detalle</a></td>
            <td><a class="game-link" href="{BASE_URL}modificar_game/{$game->id_game}">Modificar</a></td>
            <td><a class="game-link" href="{BASE_URL}eliminar_game/{$game->id_game}">Eliminar</a></td>
        </tr>
    {/foreach}
</table>


{include file="templates/footer.tpl"}