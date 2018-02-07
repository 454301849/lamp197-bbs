<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class user_admin extends Model
{
    public $timestamps = false;
    protected $table = 'user_admin';
    protected $fillable = ['name','pass','droit','image','time'];
}
