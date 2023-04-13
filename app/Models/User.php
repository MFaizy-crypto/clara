<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Jobs\MailJob;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Return the User list with filter.
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
                $subQuery->orWhere('users.first_name', 'like', '%'.$searchText.'%');
                $subQuery->orWhere('users.last_name', 'like', '%'.$searchText.'%');
                $subQuery->orWhere('name','like', '%'.$searchText.'%');
            }
        })->where(function($subQuery)use($date){
            if($date){
                $subQuery->whereBetween('users.created_at',$date);
            }
        })->where("users.is_admin",0);       

        if($query->count() && isset($array['limit'])){
           $page_count = ceil($query->count() / $array['limit']);

           $query->offset($array['offset'])->limit($array['limit']);
        }
        $query = $query->orderBy('users.created_at', 'desc');
        
        if(isset($array['paginate'])) {
           $paginate = $query->paginate($array['paginate'])->setPath(route('admin.user.list').'?search_text='.$searchText);
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
    public function deleteUser($id)
    {
        try {
            static::where('id', $id)->delete();
            return true;
        } catch(\Exception $e) {
            return false;
        }
    }

    public function sendUpdateMail($array = []){
        if(isset($array) && count($array) > 0)
        {
            $user = static::find($array['id']);
            if(isset($user->id))
            {
                $data = array();
                $data = $user->toArray();
                $data['change_status'] = $array['status'];
                $data['old_data'] = $array['old_data'];
                $subject = $array['subject'];
                $data['send_to'] = $array['send_to'];
                if($array['send_to'] == "admin"){
                    $sendToArray = User::where(["is_admin"=>1,"status" => 1])->pluck("id")->toArray();
                } else {
                    $sendToArray = User::where(["id"=>$array['id']])->pluck("id")->toArray();
                }
                $userData = User::select('id','email','first_name','last_name')
                            ->whereIn('id',$sendToArray)->get()->toArray();
                $to = array();
                foreach($userData as $key => $user)
                {
                    $to[$key] = $user['email'];
                }
                if(count($to)>0){
                    $data['attachFile'] = [];
                    $data['sender'] = auth()->user()->name;
                    $cc = [];
                    $data['link'] = url('/admin/users/'.$data['id'].'/edit');
                    $template = 'emails.user_update';
                    $from['email'] = env("MAIL_FROM_ADDRESS");
                    $from['name'] = env("MAIL_FROM_NAME");
                    $data['regards'] = env("MAIL_FROM_NAME");
                    try{
                        MailJob::dispatch($to, $from, $subject, '', $template, $data, $cc, '', []); 
                    }catch(\Exception $e){
                    }
                }
            }
        }
    }
}
