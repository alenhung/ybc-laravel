<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laratrust\Traits\LaratrustUserTrait;

class IndexCover extends Model
{
    //
    use LaratrustUserTrait;
    protected $table = 'indexCover';
}
