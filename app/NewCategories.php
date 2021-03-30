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
    public function news_rus(){
        return $this->hasMany('App\Blog_rus');
    }
}
