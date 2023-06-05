<?php

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

require_once "models/game_model.php";
require_once "views/game_view.php";
require_once "controllers/game_controller.php";

require_once "views/home_view.php";

// aca irian los require once de los archivos php
//
$game = new game_controller();
$game -> show_games();
$home= new home_view();
// lee la acción del envio del formulario
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto
}

$parametros=explode('/',$action);

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
        case 'detalle':
                //mostrar la pagina para registrarse
            break;
    }
