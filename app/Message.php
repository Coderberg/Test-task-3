<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // Mass assigned
    protected $fillable = ['name', 'email', 'message'];

}
