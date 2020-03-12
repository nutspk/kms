<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class create_subcoures extends Model
{
    protected $table = 'create_subcoures';
    public function create_mainmenu()
    {
        return $this->belongsTo(create_mainmenu::class);
    }

    public function listsubs()
    {
         return $this->hasMany(listsubs::class);
    }

}
