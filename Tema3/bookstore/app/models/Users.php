<?php
use Illuminate\Database\Eloquent\Model as Eloquent;
class Users extends Eloquent{
    public function scopeRegister(){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if ($post['username'] == "" ||
            $post['password'] == "" ) {
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
        else{
            $user = $this->where('name', $post['username'])->first();
			if ($user->password == md5($post['password'])) {
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = array(
					"id" => $user->id,
					"name" => $user->name
                );
                // var_dump($_SESSION);
				header('Location' . ROOT_URL);
			} else {
					Messages::setMsg('Incorrect Login', 'error');
                // echo "Esta todo mal";
           }
        }

}
}