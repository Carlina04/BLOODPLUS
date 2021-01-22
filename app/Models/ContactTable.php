<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactTable extends Model
{
    use HasFactory;
    protected $primaryKey = 'contact_id';
    public function infotable()
    {
        return $this->belongsTo('App\Models\InfoTable', 'contact_id', 'contact_id');
    }
}
