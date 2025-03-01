<?php

class LogoutController extends AppController
{
    public function __construct(){
        $this->logout();
    }

    public function logout(){
        $data['title'] = 'Home page';
        $data['mainContent'] = '<h1>Home page specific content</h1>';
        session_start();
        
      
        session_unset();
        session_destroy();
        
     
        header('Location: home');
        
        exit();
        
    }
}
