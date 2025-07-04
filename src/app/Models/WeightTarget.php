<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeightTarget extends Model
{
    use HasFactory;

    protected $guarded =array('id');
    public static $rules = array(
        'user_id' => 'required',
        'target_weight'=> 'required',
    );
}
