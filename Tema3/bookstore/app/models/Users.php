<?php
use Illuminate\Database\Eloquent\Model as Eloquent;
class Users extends Eloquent{
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
    public function scopelogin(){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if ($post['username'] == "" ||
            $post['password'] == "" ) {
            header("Location: " . ROOT_URL . "users/login");
        }
        elseif($post["remember"]=="remember"){
            $value= date('Y-m-d');
            $ruta = "C:/wamp64/tmp";
            setcookie("HeCookie", $value, time()+7*24*60*60, $ruta);
            header('Location' . ROOT_URL);
        }
        else{
            $user = $this->where('name', $post['username'])->first();
			if ($user->password == md5($post['password'])) {
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = array(
					"id" => $user->id,
					"name" => $user->name
                );
                $value= date('Y-m-d');
                $ruta = "C:/wamp64/tmp";
                setcookie("HeCookie", $value, time()+3600, $ruta);
				header('Location' . ROOT_URL);
			} else {
					Messages::setMsg('Incorrect Login', 'error');
           }
        }

}
}