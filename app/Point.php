<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Point extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'form_1','form_2','form_3','form_comment',
        'literature_1','literature_2','literature_3','literature_comment',
        'info_collect_1','info_collect_2','info_collect_3','info_collect_4','info_collect_comment',
        'conclusion_1','conclusion_2','conclusion_3','conclusion_4','conclusion_comment',
        'opinion_1','opinion_2','opinion_3','opinion_4','opinion_comment',
        'abstract_1','abstract_2','abstract_3','abstract_comment',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token','full_point',
    ];
}
