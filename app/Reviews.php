<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
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
