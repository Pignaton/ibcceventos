<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;


class Register extends Model
{
    protected $table ="registers";
    protected $fillable = ['name', 'age', 'email' , 'phone', 'sex', 'birthdate'];
    use Notifiable, SoftDeletes; 
}
