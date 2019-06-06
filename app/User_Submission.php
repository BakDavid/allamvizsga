<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User_Submission extends Model
{
    use Notifiable;

    protected $hidden = [
        //'remember_token', 'user_id', 'submission_id'
    ];
}
