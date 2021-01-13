<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersTable extends Model
{
    use HasFactory;
    public function add()
    {
        return $this->hasOne('App\Models\InfoTable', 'info_id', 'info_id');
    }
}
