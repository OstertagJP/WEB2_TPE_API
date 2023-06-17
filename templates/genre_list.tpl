{include file="templates/head.tpl"}
{include file="templates/header.tpl"}


<ul class="list-group">
    {foreach from=$genres item=$genre}
        <li>Genero: {$genre -> name_genre}  </li>
        <li>Descripcion: {$genre -> description_genre}</li><br>
        <a href="bygenero/{$genre -> id_genre}">Juegos de este genero</a><br><br>                     
    {/foreach}
</ul>

{include file="templates/footer.tpl"}