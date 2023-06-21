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

    public function controller_update_genre($id){
        $genre= $this->model->get_genre_modif($id);
        $this->view->show_genres_modif($genre);
    }

    public function update_genre($id){           //CONTROLADOR - MODIFICA/EDITA GÉNERO YA CARGADO
        
        if (isset($_POST['name_genre'], $_POST['description_genre'])){
            $name_genre = $_POST['name_genre'];
            $description_genre = $_POST['description_genre'];
            $this->model->update_genre_model($name_genre, $description_genre, $id);
            // $this->view->show_genres();
            // header('Location: generos');
            header("Location: ". BASE_URL . "generos");                                        //UNA VEZ MODIFICADO EL REGISTRO, REDIRECCIONO A LA PAGINA DE GENEROS
        }
    }
   

    public function add_genre(){           //Funcion para agregar un genero nuevo. Lee los valores que ingreso el usuario en el formulario
        if (isset($_POST['name_genre'], $_POST['description_genre'])){
            $name_genre=$_REQUEST['name_genre'];
            $description_genre=$_REQUEST['description_genre'];
                    
            $this->model->insert_genre($name_genre, $description_genre);
            header("Location: generos");                              //UNA VEZ QUE AGREGO EL GENERO NUEVO, REDIRECCIONO A LA PAGINA DE GENEROS
        } 
    }

    public function delete_genre($id){   //Funcion para eliminar un juego segun su id
        $this->model->delete_genre($id);
        header("Location: ". BASE_URL . "generos");
    }
    
}
