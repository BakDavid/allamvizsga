<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Cooperator extends Model
{
    use Notifiable;

    protected $fillable = [
        'first_name','last_name', 'email',
        //'student',
        'address', 'city', 'country', 'zipcode', 'telephone',
        'university', 'department',
        //'facebook', 'google',
        //'twitter', 'linkedin',
        'birth_date',
        //'gender',
    ];

    protected $hidden = [
        //'remember_token',
    ];
}
