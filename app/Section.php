<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{

    public function posts()
    {
        return $this->hasMany('App\Post')
            ->orderByDesc('id')
            ->get();
    }
}
