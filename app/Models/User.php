<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use  Notifiable;
    use SoftDeletes;
    protected $table = 'users';
    public $timestamps = true;

    use LogsActivity;
    protected static $logAttributes = ['*'];

    protected $dates = ['created_at','updated_at'/*,'deleted_at'*/];
    protected $fillable = [
        'type',
        'parent_id',
        'name',
        'email',
        'mobile',
        'username',
        'password',
        'activation_code',
        'forgot_password_code',
        'rc_copy',
        'credit',
        'lat',
        'lng',
        'address',
        'address_notes',
        'contract_image',
        'bank_account',
        'contact_name',
        'plan_id',
        'status',
        'verified_at',
    ];



    public function addresses(){
        return $this->hasMany('App\Models\Address','user_id');
    }


//    public function findForPassport($username){
//            return $this->where('username', $username)->first();
//    }


    public function orders(){
        return $this->hasMany('App\Models\Order','user_id');
    }

    public function plan(){
        return $this->belongsTo('App\Models\Plan');
    }

    public function transactions()
    {
        return $this->morphMany('App\Models\Transaction', 'sign');
    }

//    public function AauthAcessToken(){
//        return $this->hasMany('\App\OauthAccessToken');
//    }


}
