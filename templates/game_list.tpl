{include file="templates/head.tpl"}
{include file="templates/header.tpl"}


{* Copiado para reciclar *}




<!-- lista de tareas -->
<ul class="list-group">
    {foreach from=$games item=$game}
        <li>Nombre: {$game -> name_game}  </li>
        <li>Descripcion: {$game -> description_game}</li>
        <li>Genero: {$game -> name_genre}</li>
<a href="detalle/{$game -> id_game}">detalle</a>
    {/foreach}
</ul>

{include file="templates/footer.tpl"}