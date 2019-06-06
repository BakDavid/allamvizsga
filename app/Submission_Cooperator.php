<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Submission_Cooperator extends Model
{
    use Notifiable;

    protected $hidden = [
        //'remember_token', 'submission_id', 'cooperator_id'
    ];
}
