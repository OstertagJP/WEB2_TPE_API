<?php

require_once 'models/game_model.php';
require_once 'views/game_view.php';

class game_controller {

    private $model;
    private $view;

    //Acá hay que iniciar los atributos y el contructor
    function __construct()
    {

        $this->model = new game_model();
        $this->view = new game_view();
    }

    public function controller_games() {
        $games = $this->model->get_games();
        $this->view->show_games($games);
    }
}


