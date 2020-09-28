<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //changing database name
    protected $table ='posts';
    //changing primary key
    public $primaryKey ='id';
    //changing timestamp
    public $timestamp =true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
