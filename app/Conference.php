<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    use Notifiable;

    protected $fillable = [
        'name', 'address', 'city',
        'country', 'zipcode','comment','public','university','room',
        'application_start', 'application_deadline', 'abstract_upload_deadline',
        'thesis_upload_deadline'
    ];

    protected $hidden = [
        //'remember_token','deleted','conference_sponsor_id'
    ];
}
