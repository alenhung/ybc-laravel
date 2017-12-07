<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laratrust\Traits\LaratrustUserTrait;

class ServiceInfo extends Model
{
    //
    protected $table = 'ServiceInfo';
    use LaratrustUserTrait;
}
