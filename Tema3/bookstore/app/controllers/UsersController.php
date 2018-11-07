<?php
class UsersController extends Controller{
    public function register(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            Users::Register();
            header("Location: ".ROOT_URL);
            }else{
                $this->view('register.html',  ['anadir' => "ha sido añadido"]);
            }
    }
    public function login(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            Users::login();
           header("Location: ".ROOT_URL);
            }else{
                $this->view('login.html',  ['anadir' => "ha sido añadido"]);
            }
    }
    public function logout(){
        session_destroy();
        header("Location: ".ROOT_URL);
    }
}