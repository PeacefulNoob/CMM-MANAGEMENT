<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewCategories extends Model
{
    protected $fillable = [
        'title','description'
    ];
    public function news(){
        return $this->hasMany('App\News');
    }
}
