<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $table = 'tags';

    public function quiz(){
        return $this->hasMany('App\Quiz', 'id_tag', 'id');
    }
    
    public function downloads(){
        return $this->hasMany('App\Downloads', 'id_tag', 'id');
    }
    
    public function tutorials(){
        return $this->hasMany('App\Tutorials', 'id_tag', 'id');
    }
}
