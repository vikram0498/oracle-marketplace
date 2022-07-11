<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Childchildcategory extends Model
{
    protected $fillable = ['subchildcategory_id','name','slug', 'language_id'];
    public $timestamps = false;

    public function subchildcategory()
    {
    	return $this->belongsTo('App\Models\Subchildcategory')->withDefault(function ($data) {
			foreach($data->getFillable() as $dt){
				$data[$dt] = __('Deleted');
			}
		});
    }

    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = str_replace(' ', '-', $value);
    }

    public function attributes() {
        return $this->morphMany('App\Models\Attribute', 'attributable');
    }
}
