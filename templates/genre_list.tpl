{include file="templates/head.tpl"}
{include file="templates/header.tpl"}


<ul class="list-group">
    {foreach from=$genres item=$genre}
        <li>Genero: {$genre -> name_genre}  </li>
        <li>Descripcion: {$genre -> description_genre}</li>
        
        {* <a href="detalle/{$genre -> id_game}">Detalle</a>                 VER SI ES NECESARIA ESTA FUNCION*}       
    {/foreach}
</ul>

{include file="templates/footer.tpl"}