<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laratrust\Traits\LaratrustUserTrait;

class IndexInfo extends Model
{
    //
    use LaratrustUserTrait;
    protected $table = 'indexInfo';
}
