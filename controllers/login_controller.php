<?php

require_once('views/login_view.php');

class login_controller {

    private $view;
    private $model;

    public function __construct() {
        $this->view = new login_view();
        $this->model = new user_model();
    }

    public function show_login() {
        $this->view->show_login_view();
    }

    public function verify_user() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = $this->model->get_by_username($username);         

        if (!empty($user) && password_verify($password, $user->password)) {  // encontró un user con el username que mandó, y tiene la misma contraseña
            //INICIO LA SESSION Y LOGUEO AL USUARIO...
            session_start();
            $_SESSION['ID_USER'] = $user->id_user;
            $_SESSION['USERNAME'] = $user->email;
            header('Location: home');   //aca lo mandamos a home, PERO YA LOGUEADO
        } else {
            $this->view->show_login_view("Login incorrecto");
        }
       
    }

}
