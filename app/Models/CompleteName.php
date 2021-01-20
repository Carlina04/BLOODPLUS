<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompleteName extends Model
{
    use HasFactory;
    protected $primaryKey = 'name_id';
    public function infotable()
    {
        return $this->belongsTo('App\Models\InfoTable', 'name_id', 'name_id');
    }
}
