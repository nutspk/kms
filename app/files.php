<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class files extends Model
{
    protected $table = 'files';
    protected $primaryKey = 'id';
  
    public function  travel()
    {
        return $this->hasMany( travel::class);
    }
}
