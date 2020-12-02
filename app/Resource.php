<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    // the name of the table used by this model
    protected $table = 'resources';
    public $timestamps = false; // no need for created_at and updated_at
    // to change the primary key of this model
    // protected $primaryKey = 'id';
}
