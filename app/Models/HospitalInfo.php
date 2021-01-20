<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalInfo extends Model
{
    use HasFactory;

    public function address()
    {
        return $this->belongsTo('App\Models\CompleteAdd','hos_add','add_id');
    }

    public function contact()
    {
        return $this->belongsTo('App\Models\ContactTable','hos_contact','contact_id');
    }

    protected $primaryKey = 'hos_id';
}
