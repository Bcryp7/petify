<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Species extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['name', 'status'];
    protected $casts = ['status' => 'boolean'];
}
