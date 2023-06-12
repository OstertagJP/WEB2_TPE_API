{include file="templates/head.tpl"}
{include file="templates/header.tpl"}


{* Copiado para reciclar *}




<!-- lista de tareas -->
<ul class="list-group">
    {foreach from=$games item=$game}
        <li>{$game -> name_game}  </li>
        {* <li>Descripcion: {$game -> description_game}</li>
        <li>Genero: {$game -> name_genre}</li> *}
        <a href="{$BASE_URL}juego/{$game -> id_game}">Detalle</a>
    {/foreach}
</ul>

{include file="templates/footer.tpl"}