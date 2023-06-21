{include file="templates/head.tpl"}
{include file="templates/header.tpl"}

<table>
    <tr class="table_genre">
            <th>Genero:</th>
            <th>Descripcion:</th>
        {foreach from=$genres item=$genre}
            <tr>
                <td>{$genre ->name_genre} </td>
                <td>{$genre ->description_genre}</td>
                <td><a href="{BASE_URL}modificar/{$genre ->id_genre}">EDITAR</a></td>
                <td><a href="{BASE_URL}borrar_genre/{$genre ->id_genre}">BORRAR</a></td>
                <td><a href="{BASE_URL}bygenero/{$genre ->id_genre}">Juegos de este genero</a></td>
            </tr>
        {/foreach}
    </tr>
</table>


{include file="templates/footer.tpl"}