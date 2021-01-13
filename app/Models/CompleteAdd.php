<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompleteAdd extends Model
{
    use HasFactory;

    public function infotable()
    {
        return $this->belongsTo('App\Models\InfoTable', 'add_id', 'add_id');
    }
}
