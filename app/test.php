<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    public $timestamps = false;
    public $table = 'tests';
    protected $fillable = ['name','email','mobile','status'];

}
