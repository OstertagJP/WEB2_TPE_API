<?php

require_once 'models/genre_model.php';
require_once 'views/genre_view.php';

class genre_controller{

    private $model;
    private $view;

    function __construct(){
        $this->model = new genre_model();
        $this->view = new genre_view();
    }

    public function controller_genres(){
        $genres = $this->model->get_genre();
        $this->view->show_genres($genres);
    } 

}
