<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Minister extends Model
{

    protected $table = 'brands';
    public $timestamps = false; 

    protected $fillable = ['name','desc', 'name_ar', 'vip', 'created', 'image_path', 'note1',
        'note2', 'note3','note4','note5','note6','note7','note8'];
                
    
}
