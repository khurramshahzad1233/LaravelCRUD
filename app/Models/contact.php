<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    protected $primaryKey = 'id';

    // set attribute function 
    public function setNameAttribute($value){
        $this->attributes['name'] = ucwords($value);
    }

    // get attribute function 
    public function getCreatedAtAttribute($value){
        return date('d-M-Y',strtotime($value));
    }
}


