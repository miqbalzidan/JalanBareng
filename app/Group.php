<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //Table Name
    protected $table = 'groups';
    //primary key
    protected $primarykey = 'id';
    //Timestamp
    public $timestamps = true;

    public function users(){
        return $this->hasMany('App\User');
    }

    //relasi grup dengan post
    public function post(){
        return $this->belongsTo('App\Post');
    }
}
