<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laratrust\Traits\LaratrustUserTrait;

class WorkPhotos extends Model
{
    //
    use LaratrustUserTrait;
    protected $table = 'WorkPhotos';
}
