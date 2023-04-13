<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;


class Project extends Model
{
     use SoftDeletes;
    use Sortable;
    public $sortable = ['id', 'title','description'];
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
}
