<?php

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

require_once "models/game_model.php";
require_once "views/game_view.php";
require_once "models/genre_model.php";
require_once "views/genre_view.php";
require_once "controllers/game_controller.php";
require_once "controllers/genre_controller.php";
require_once "views/home_view.php";

// aca irian los require once de los archivos php
//


$genres = new genre_controller();
$genres->controller_genres();

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
        $genres->controller_genres();      //llama al controlador para mostrar todos los generos
        break;
    case 'juegos':
        $juegos->show_games();      //muestra todos los juegos
        break;
    case 'registro':
        $registro->mostrar_registro();      //mostrar la pagina para registrarse
        break;
        case 'detalle':
                //mostrar la pagina para registrarse
            break;
    }
