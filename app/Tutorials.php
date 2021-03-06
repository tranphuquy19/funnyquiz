<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutorials extends Model
{
    protected $table = 'tutorials';

    public function id_tag(){
        return $this->belongsTo('App\Tags', 'id_tag', 'id');
    }public function author(){
        return $this->belongsTo('App\Users', 'author', 'id');
    }
}
