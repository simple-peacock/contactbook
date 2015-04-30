<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

    // need this to make mass assignment possible
    protected $fillable = ['name', 'phone'];

}