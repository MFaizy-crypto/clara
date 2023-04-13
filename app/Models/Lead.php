<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    /**
     * Return the Lead list with filter.
     *
     * @param  array  $array
     * @return array
     */
    public function getListWithFilter($array = [])
    {
        $paginate = [];
        $page_count = 1;
        $searchText = @$array['requestData']['search_text'] ?? "";
        $searchId = @$array['requestData']['search_id'] ?? "";
        $date       = [];

        if(isset($array['requestData']['daterange'])){
           $rangeDateArr = explode(" - ", $array['requestData']['daterange']);
           $dateFrom = date('Y-m-d 00:00:00', strtotime(str_replace(",", "", trim($rangeDateArr[0]))));
           $dateTo = date('Y-m-d 23:59:59', strtotime(str_replace(",", "", trim($rangeDateArr[1]))));
           $date = [$dateFrom, $dateTo];
        }
        
        $query = static::select($array['select'])
        ->where(function($subQuery) use($searchText, $date){
            if($searchText != ""){
                $subQuery->orWhere('leads.name', 'like', '%'.$searchText.'%');
                $subQuery->orWhere('leads.email', 'like', '%'.$searchText.'%');
                $subQuery->orWhere('leads.address','like', '%'.$searchText.'%');
            }
        })->where(function($subQuery)use($date){
            if($date){
                $subQuery->whereBetween('leads.created_at',$date);
            }
        });       

        if($query->count() && isset($array['limit'])){
           $page_count = ceil($query->count() / $array['limit']);

           $query->offset($array['offset'])->limit($array['limit']);
        }
        $query = $query->orderBy('leads.created_at', 'desc');
        
        if(isset($array['paginate'])) {
           $paginate = $query->paginate($array['paginate'])->setPath(route('admin.lead.list').'?search_text='.$searchText);
        }
        $result = $query->get();
        return ['result' => $result, 'page_count' => $page_count, 'paginate' => $paginate];
    }

    /**
     * Delete promo code record.
     *
     * @param  array  $array
     * @return array
     */
    public function deleteLead($id)
    {
        try {
            static::where('id', $id)->delete();
            return true;
        } catch(\Exception $e) {
            return false;
        }
    }
}
