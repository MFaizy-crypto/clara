<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
     use SoftDeletes;
     protected $table = 'categories';
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
}
