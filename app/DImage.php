<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DImage extends Model
{
    protected $table = 'design_images';

    protected $fillable = [
        'image', 'design_id'
    ];
    public function design()
    {
    return $this->belongsTo('App\Design');
    }
}
