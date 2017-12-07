<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laratrust\Traits\LaratrustUserTrait;

class History extends Model
{
    //
    protected $table = 'History';
    use LaratrustUserTrait;
}
