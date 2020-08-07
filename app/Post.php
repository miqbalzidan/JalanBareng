<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table = 'posts';
    //primary key
    protected $primarykey = 'id';
    //Timestamp
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }

    //relasi dengan group
    public function groups(){
        return $this->hasMany('App\Group');
    }
}
