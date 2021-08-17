<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donarform extends Model
{
    // use HasFactory;
    // protected $table="donarforms";
    // protected $fillable=['post_title','post_author'];
    protected $fillable =['fist_name','last_name','gender','birth_date','blood_group','address','division','district','upozilla','nationality','email','phone','lastdonate'];
}
