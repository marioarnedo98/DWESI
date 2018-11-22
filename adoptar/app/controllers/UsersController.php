<?php
class UsersController extends Controller{
    public function register(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            Users::Register();
            header("Location: ".ROOT_URL);
            }
    }
    public function login(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            Users::login();
            // Messages::setMsg('Correct Login', 'success');
           header("Location: ".ROOT_URL);
            }
    }
    public function logout(){
        session_destroy();
        header("Location: ".ROOT_URL);
    }
}