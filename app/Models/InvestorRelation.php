<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;


class InvestorRelation extends Model
{
     use SoftDeletes;
    use Sortable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $sortable = ['id', 'title','category.name'];

    public function category(){
     return $this->hasOne('App\Models\Category',"id","category_id");
    }
}
