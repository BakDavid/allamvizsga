<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Submission_Point extends Model
{
    use Notifiable;

    protected $hidden = [
        'remember_token', 'point_id', 'submission_id'
    ];
}
