<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailcoures extends Model
{
    protected $table = 'detailcoures';
    public function listsub()
    {
        return $this->belongsTo(listsub::class);
    }
}
