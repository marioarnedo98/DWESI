<?php
use Illuminate\Database\Eloquent\Model as Eloquent;
class Files extends Eloquent{
    public function posts(){
        return $this->belongsTo('Posts');
    }
}