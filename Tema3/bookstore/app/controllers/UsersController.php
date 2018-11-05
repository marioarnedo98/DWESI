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

    }
    public function logout(){
        
    }
}