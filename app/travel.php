<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class travel extends Model
{
    protected $table = 'travels';
    protected $primaryKey = 'id_travel';

    public function type_locations()
    {
        return $this->belongTo(type_locations::class); 
    }

    public function file()
    {
        return $this->hasMany(file::class);
    }
}
