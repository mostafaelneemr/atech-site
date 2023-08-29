<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;



class Address extends Model
{

    protected $table = 'addresses';
    public $timestamps = true;
    use SoftDeletes;
    // use LogsActivity;
    // protected static $logAttributes = ['*'];

    protected $dates = ['created_at','updated_at'/*,'deleted_at'*/];
    protected $fillable = [
        'name',
        'user_id',
        'mobile',
        'area_number',
        'street_name',
        'building_number',
        'flat_number',
        'notes',
        'lat',
        'lng',
    ];



    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }

}