<?php

require_once 'models/game_model.php';
require_once 'views/game_view.php';

class game_controller
{

    private $model;
    private $view;

    //Acá hay que iniciar los atributos y el contructor
    function __construct()
    {

        $this->model = new game_model();
        $this->view = new game_view();
    }

    public function controller_games()
    {         //Funcion que muestra todos los juegos 
        $games = $this->model->get_games();
        $this->view->show_games($games);
    }

    public function controller_game($id)
    {         //Funcion que muestra detalle de un juego
        $game = $this->model->get_game($id);
        $this->view->show_game($game);
    }

    public function controller_game_bygenre($id)
    {         //Funcion que muestra detalle de un juego segun el genero solicitado
        $game_id = $this->model->get_game_id($id);
        $this->view->show_game_id($game_id);
    }

    public function modificar_game($id)
    {
        $game = $this->model->get_game($id);
        $this->view->modificar_game($game);
        
    }

    public function add_game()
    {           //Funcion para agregar un juego nuevo. Lee los valores que ingreso el usuario en el formulario
        if (isset($_POST['name_game'], $_POST['description_game'], $_POST['genre_game'])) {
            $name_game = $_REQUEST['name_game'];
            $description_game = $_REQUEST['description_game'];
            $genre_game = $_REQUEST['genre_game'];

            $this->model->insert_game($name_game, $description_game, $genre_game);
            header("Location: juegos");                              //UNA VEZ QUE AGREGO EL JUEGO NUEVO, REDIRECCIONO A LA PAGINA DE JUEGOS
        }
    }
    // public function delete_game(){    //Funcion para eliminar un juego. Hay que ver como tomamos el valor del ID para saber cual borrar

    // }

}
