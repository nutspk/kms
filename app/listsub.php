<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class listsub extends Model
{
    protected $table = 'listsubs';
    public function create_subcoures()
    {
        return $this->belongsTo(create_subcoures::class);
    }

    public function detailcoures()
    {
         return $this->hasMany(detailcoures::class);
    }
}
