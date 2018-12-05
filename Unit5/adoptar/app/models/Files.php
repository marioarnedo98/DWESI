<?php
use Illuminate\Database\Eloquent\Model as Eloquent;
class Files extends Eloquent{
    public function books(){
        return $this->belongsTo('Dogs');
    }
}