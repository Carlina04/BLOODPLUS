<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoTable extends Model
{
    use HasFactory;

    protected $primaryKey = 'info_id';
    public function add()
    {
        return $this->hasOne('App\Models\CompleteAdd', 'add_id', 'add_id');
    }
    public function name()
    {
        return $this->hasOne('App\Models\CompleteName', 'name_id', 'name_id');
    }
    public function contact()
    {
        return $this->hasOne('App\Models\ContactTable', 'contact_id', 'contact_id');
    }
}

