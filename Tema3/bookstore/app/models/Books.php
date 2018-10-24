<?php
use Illuminate\Database\Eloquent\Model as Eloquent;

class Books extends Eloquent
{
 public function scopeAdd(){
     $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
     if($post['name']=""||
        $post['price']=""||
        $post['authors']=""||
        $post['isbn']=""||
        $post['publisher']=""||
        $post['published_date']=""){
           header("Location: ".ROOT_URL."books/add");
        }else{
     $this->name=$post['name'];
     $this->price= $post['price'];
     $this->authors= $post['authors'];
     $this->isbn= $post['isbn'];
     $this->publisher= $post['publisher'];
     $this->published_date= $post['published_date'];
     $this->save();
        }
 }
}
