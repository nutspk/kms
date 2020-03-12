<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_locations extends Model
{
    protected $table = 'type_locations';

    public function travel()
    {
        return $this->hasMany(travel::class);
    }
}
