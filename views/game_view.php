<?php
require_once 'libs/Smarty.class.php';

class game_view {

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    public function show_games($games) {
        // asigno variables al tpl smarty
        $this->smarty->assign('games', $games);
        $this->smarty->assign('BASE_URL', BASE_URL);
        // muestro el tpl
        $this->smarty->display('templates/game_list.tpl');
    }

    public function show_game($game) {
        // asigno variables al tpl smarty
        $this->smarty->assign('game', $game);
        $this->smarty->assign('BASE_URL', BASE_URL);
        // muestro el tpl
        $this->smarty->display('templates/game_details.tpl');
    }
    
    public function show_game_id($game_id) {
        // asigno variables al tpl smarty
        $this->smarty->assign('game', $game_id);
        $this->smarty->assign('BASE_URL', BASE_URL);
        // muestro el tpl
        $this->smarty->display('templates/game_details_id.tpl');
    }

    public function modificar_game($game){
        // asigno variables al tpl smarty
        $this->smarty->assign('game', $game);
        $this->smarty->assign('BASE_URL', BASE_URL);
        // muestro el tpl
        $this->smarty->display('templates/modificar_game.tpl');
    }
    
}

