<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectCat extends Model
{
    public function project()
    {
    	return $this->belongsToMany('App\Projects');
    }

    public function getActive()
    {
    	return $this->published()
            ->get();
    }

    public function scopePublished($query)
    {
    	$query->where(['active'=>1]);
    }
}
