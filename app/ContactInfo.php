<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laratrust\Traits\LaratrustUserTrait;

class ContactInfo extends Model
{
    //
    use LaratrustUserTrait;
    protected $table = 'ContactInfo';
}
