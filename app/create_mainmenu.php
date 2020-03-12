<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class create_mainmenu extends Model
{
    protected $table = 'create_mainmenus';
    public function create_subcoures()
    {
         return $this->hasMany(create_subcoures::class);
    }
}
