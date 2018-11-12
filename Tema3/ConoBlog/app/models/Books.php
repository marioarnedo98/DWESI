<?php
use Illuminate\Database\Eloquent\Model as Eloquent;

class Books extends Eloquent
{
    public function scopeAdd()
    {
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if ($post['name'] == "" ||
            $post['price'] == "" ||
            $post['authors'] == "" ||
            $post['isbn'] == "" ||
            $post['publisher'] == "" ||
            $post['published_date'] == "") {
                Messages::setMsg('Incorrect Book', 'error');
            header("Location: " . ROOT_URL . "books/add");
        } else {
            $this->name = $post['name'];
            $this->price = $post['price'];
            $this->authors = $post['authors'];
            $this->isbn = $post['isbn'];
            $this->publisher = $post['publisher'];
            $this->published_date = $post['published_date'];
            $this->save();
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
}
