<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Reviewer_Point extends Model
{
    use Notifiable;

    protected $hidden = [
        'remember_token', 'user_id', 'point_id'
    ];
}
