<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    public function categories()
    {
    	return $this->belongsToMany('App\ProjectCat');
    }

    public function getActive()
    {
    	return $this->published()
            ->get();
    }

    public function getById($id)
    {
        return $this->published()
            ->id($id)
            ->firstOrFail();
    }

    public function scopeId($query, $id)
    {
        $query->where(['id'=>$id]);
    }
    
    public function scopePublished($query)
    {
    	$query->where(['active'=>1]);
    }
}
