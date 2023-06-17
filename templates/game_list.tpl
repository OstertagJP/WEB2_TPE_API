{include file="templates/head.tpl"}
{include file="templates/header.tpl"}

<!-- lista de juegos -->
<ul class="list-group">
    {foreach from=$games item=$game}
        <li>{$game-> name_game}  </li>
        
        <a href="{BASE_URL}juego/{$game-> id_game}">Detalle</a>
    {/foreach}
</ul>


{include file="templates/footer.tpl"}