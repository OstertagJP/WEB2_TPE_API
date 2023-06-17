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

    public function controller_genres(){              //CONTROLADOR - LISTA TODOS LOS GÉNEROS CARGADOS
        $genres = $this->model->get_genre();
        $this->view->show_genres($genres);
    } 

    public function controller_update_genre($id){           //CONTROLADOR - MODIFICA/EDITA GÉNERO YA CARGADO
        
        if (isset($_POST['name_genre'], $_POST['description_genre'], $_POST['id_genre'])){
            $name_genre = $_POST['name_genre'];
            $description_genre = $_POST['description_genre'];
            // $id_genre = $_POST['id_genre'];
            $genre=$this->model->update_genre($name_genre, $description_genre, $id);
        }
    }

}
