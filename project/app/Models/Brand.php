<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name','slug','photo', 'status', 'featured', 'trending', 'hot', 'top', 'latest'];
    public $timestamps = false;

    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
}
