<?php
use Illuminate\Database\Eloquent\Model as Eloquent;
class Users extends Eloquent{
public function scopelogin(){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if ($post['email'] == "" ||
            $post['password'] == "" ) {
            header("Location: " . ROOT_URL . "users/login");
        }else{
            $email = $this->where('email', $post['email'])->first();
			if ($email->password == md5($post['password'])) {
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = array(
                    
					"id" => $email->id,
                    "email" => $email->email,
                    "user" => $email->name
                );
            }
        }
    }
public function scopeRegister(){

    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    if ($post['name'] == "" ||
        $post['username'] == "" ||
        $post['email'] == "" ||
        $post['password'] == "" ||
        $post['password2'] == "" ) {
        header("Location: " . ROOT_URL);
    }
    else{
        if(preg_match("/^([a-zA-Z0-9]){6,16}$/",$post['password'])){
        $this->name = $post['name'];
        $this->surname= $post['username'];
        $this->email= $post['email'];
        $this->password = md5($post['password']);
        $this->save();
        }else{
            var_dump("mal");
            die();
            header("Location: " . ROOT_URL);
        }
    }
}
}