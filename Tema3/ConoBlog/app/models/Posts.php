<?php
use Illuminate\Database\Eloquent\Model as Eloquent;

class Posts extends Eloquent
{
    public function scopeAdd()
    {
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if ($post['title'] == "" ||
            $post['authors'] == "" ||
            $post['content'] == "") {
                Messages::setMsg('Incorrect Blog', 'error');
            header("Location: " . ROOT_URL . "Blog/add");
        } else {
            $this->title = $post['title'];
            $this->authors = $post['authors'];
            $this->content = $post['content'];
            $this->real_author = $_SESSION['user_data']['name'];
            $this->save();
            Messages::setMsg('You add a new post! Congrats!', 'success');
            if (!is_uploaded_file($_FILES['cover']['tmp_name'])) {
                $error = 'There was no file uploaded!';
                Messages::setMsg($error, 'error');
                return;
            }
            $uploadfile = $_FILES['cover']['tmp_name'];
            $uploadname = $_FILES['cover']['name'];
            $uploadtype = $_FILES['cover']['type'];
            $uploaddata = file_get_contents($uploadfile);

            $file = new Files;
            $file->filename = $uploadname;
            $file->mimetype = $uploadtype;
            $file->filedata = $uploaddata;
            $this->files()->save($file);
        }
    }
    public function files()
    {
        return $this->hasOne('Files');
    }
    public function users(){
        return $this->belongsTo('Users');
    }
}
