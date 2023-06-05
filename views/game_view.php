<?php
require_once 'libs/Smarty.class.php';

class game_view {

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function show_games($games) {
        // asigno variables al tpl smarty
        $this->smarty->assign('games', $games);
        $this->smarty->assign('BASE_URL', BASE_URL);
        // mostrar el tpl
        $this->smarty->display('templates/game_list.tpl');
    }
    
}

