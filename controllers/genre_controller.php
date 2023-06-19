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
        
        if (isset($_POST['name_genre'], $_POST['description_genre'])){
            $name_genre = $_POST['name_genre'];
            $description_genre = $_POST['description_genre'];
             $id_genre = $_POST['id_genre'];
            $this->model->update_genre($name_genre, $description_genre, $id);
            header('Location: generos');                                        //UNA VEZ MODIFICADO EL REGISTRO, REDIRECCIONO A LA PAGINA DE GENEROS
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

    public function delete_genre($id){
        
    }
}
