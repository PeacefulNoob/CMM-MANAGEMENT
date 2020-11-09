<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RImage extends Model
{
    protected $table = 'repair_images';

    protected $fillable = [
        'image', 'repair_id'
    ];
    public function repair()
    {
    return $this->belongsTo('App\Repair');
    }
}
