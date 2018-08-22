<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'form';

    protected $fillable = ['first_name', 'last_name', 'email', 'phone_number'];
}
