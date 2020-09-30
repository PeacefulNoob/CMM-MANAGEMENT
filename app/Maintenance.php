<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $fillable = [
        'title','description','user_id'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function images()
    {
    return $this->hasMany('App\MImage');
    }
}
