<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Notifiable;

    protected $fillable = [
        'category_name',
    ];

    protected $hidden = [
        'remember_token', 'deleted',
    ];
}
