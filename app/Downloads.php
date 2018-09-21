<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Downloads extends Model
{
    protected $table = 'downloads';

    public function id_tag(){
        return $this->belongsTo('App\Tags', 'id_tag', 'id');
    }
    public function author(){
        return $this->belongsTo('App\Users', 'author', 'id');
    }
}
