<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    use Notifiable;

    protected $fillable = [
        'name','submission_send_start','submission_send_end','address', 'city', 
        'country', 'zipcode','comment','public','university','room'
    ];

    protected $hidden = [
        'remember_token','deleted','conference_sponsor_id'
    ];
}
