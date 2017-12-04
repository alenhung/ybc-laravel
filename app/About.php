<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laratrust\Traits\LaratrustUserTrait;

class About extends Model
{
    //
    use LaratrustUserTrait;
    protected $table = 'about';
}
