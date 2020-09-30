<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MImage extends Model
{
    protected $table = 'maintenance_images';

    protected $fillable = [
        'image', 'maintenance_id'
    ];
    public function maintenance()
    {
    return $this->belongsTo('App\Maintenance');
    }
}
