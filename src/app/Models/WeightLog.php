<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeightLog extends Model
{
    use HasFactory;

    protected $guarded =array('id');
    public static $rules = array(
        'user_id' => 'required',
        'date'=> 'required',
        'weight'=> 'required',
    );

    
}
