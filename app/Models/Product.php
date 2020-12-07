<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // the name of the table used by this model
    protected $table = 'product';
    public $timestamps = false; // no need for created_at and updated_at
    // to change the primary key of this model
    // protected $primaryKey = 'id';
    protected $fillable = ['name','desc', 'name_ar', 'price', 'active', 'created', 's_list_id', 'user_id',
                        'minister_id', 'notes', 'note2', 'prod_note3'];
    

    // resource minister
    public function minister()
    {
        return $this->hasOne('App\Models\Minister', 'id');
    }
                        
    
}
