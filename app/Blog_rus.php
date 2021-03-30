<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog_rus extends Model
{
    protected $fillable = [
        'title','description', 'user_id','image','new_categories_id'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function categories(){
        return $this->belongsTo('App\NewCategories');
    }
}
