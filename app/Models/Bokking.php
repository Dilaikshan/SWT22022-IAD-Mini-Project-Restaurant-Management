<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bokking extends Model
{
    use HasFactory;

    protected $fillable=['name','email','datetime','people','message'];
    
}
