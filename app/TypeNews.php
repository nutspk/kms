<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeNews extends Model
{
    protected $table = 'type_news';
    public function NewsList()
    {
        return $this->hasMany(NewsList::class);
    }
}
