<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{
   

 public function teachers()
    {
        return $this->belongsToMany(teachers::class);
    }

}