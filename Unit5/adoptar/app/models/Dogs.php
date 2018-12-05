<?php
use Illuminate\Database\Eloquent\Model as Eloquent;

class Dogs extends Eloquent
{
    public function files()
    {
        return $this->hasOne('Files');
    }
}