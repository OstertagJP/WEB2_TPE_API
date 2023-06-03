<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class game_view {

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showgame($games) {
        // asigno variables al tpl smarty
        $this->smarty->assign('count', count($games)); 
        $this->smarty->assign('games', $games);

        // mostrar el tpl
        $this->smarty->display('game_list.tpl');
    }
    
}

