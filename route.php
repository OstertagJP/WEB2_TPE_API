<?php

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

// aca irian los require once de los archivos php
//

// lee la acción del envio del formulario
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto
}

switch ($parametros[0]) {
    case 'home':
        $home->mostrar_home();             //muestra el HOME    
        break;
    case 'generos':
        $generos->mostrar_generos();      //muestra todos los generos
        break;
    case 'juegos':
        $juegos->mostrar_juegos();      //muestra todos los juegos
        break;
    case 'registro':
        $registro->mostrar_registro();      //mostrar la pagina para registrarse
        break;
}
