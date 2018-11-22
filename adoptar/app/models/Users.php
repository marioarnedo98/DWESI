<?php
use Illuminate\Database\Eloquent\Model as Eloquent;
class Users extends Eloquent{
public function scopelogin(){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if ($post['username'] == "" ||
            $post['password'] == "" ) {
            header("Location: " . ROOT_URL . "users/login");
        }
    }
public function scopeRegister(){
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    if ($post['username'] == "" ||
        $post['password'] == "" ) {
        Messages::setMsg('Incorrect Register', 'error');
        header("Location: " . ROOT_URL . "users/register");
    }
    else{
        $this->name = $post['username'];
        $this->password = md5($post['password']);
        $this->save();
    }
}
}