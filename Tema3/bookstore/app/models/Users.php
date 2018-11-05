<?php
use Illuminate\Database\Eloquent\Model as Eloquent;
class Users extends Eloquent{
    public function scopeRegister(){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if ($post['username'] == "" ||
            $post['password'] == "" ) {
            header("Location: " . ROOT_URL . "books/add");
        }
        else{
            $this->name = $post['username'];
            $this->password = password_hash($post['password'],PASSWORD_DEFAULT);
            $this->save();
        }
    }
    public function login(){


}
}