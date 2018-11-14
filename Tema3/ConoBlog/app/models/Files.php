<?php
use Illuminate\Database\Eloquent\Model as Eloquent;
class Files extends Eloquent{
    public function Blog(){
        return $this->belongsTo('Blog');
    }
}