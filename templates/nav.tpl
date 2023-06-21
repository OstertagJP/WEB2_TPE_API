  <nav>
    <ul class="navbar">
        <li class="barramenu"><a href="{$BASE_URL}home">Home</a></li>
        <li class="barramenu"><a href="{$BASE_URL}juegos">Juegos</a></li>
        <li class="barramenu"><a href="{$BASE_URL}generos">Generos</a></li>
        <li class="barramenu"><a href="{$BASE_URL}login">LOGIN</a></li>

        {* {if (isset($logueado)) && !($logueado)}
            <li class="barramenu"><a href="{$BASE_URL}registrar">Registrarse</a></li>     
        {elseif {$smarty.session.permiso}==1}
            <li class="barramenu"><a href="{$BASE_URL}usuarios">Modificar Usuarios</a></li>
        {/if} *}
        
    </ul>
</nav>