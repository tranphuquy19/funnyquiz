<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = 'quiz';

    public function id_tag(){
        return $this->belongsTo('App\Tags', 'id_tag', 'id');
    }

    public function author(){
        return $this->belongsTo('App\Users', 'author', 'id');
    }
}
