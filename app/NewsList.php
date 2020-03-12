<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsList extends Model
{
    protected $table = 'news_list';
    public function typenews()
    {
        return $this->belongsTo(typenews::class);
    }
}
