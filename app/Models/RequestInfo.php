<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestInfo extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo('App\Models\User','request_from','id');
    }

    public function donor()
    {
        return $this->belongsTo('App\Models\InfoTable','request_to','info_id');
    }

    public function hospital()
    {
        return $this->belongsTo('App\Models\HospitalInfo','hos_admit_id','hos_id');
    }

    protected $primaryKey = 'req_id';
}
