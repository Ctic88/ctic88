<?php

class LoginController extends AppController
{
    public function __construct(){
        $this->init();
    }

    public function init(){
        
        // AUTENTIFICAREA UNUI USER

        // preiau din formular datele
        $userName = $_POST['userName'];
        $userPass = $_POST['userPass'];
        // instanțiez un obiect din clasa UsersModel;
        $user = new UsersModel;
        
        if($user->isAuth($userName, $userPass)){
                
                session_start();
                $_SESSION['user'] = $userName;
                echo '<h2 style="color:blue">User autentificat!</h2>';
                header( 'Location: home');
            }
            else {
                echo '<h2 style="color:red">NU AI ACCES!</h2>';
                header('Location: home');
            }
    }
}