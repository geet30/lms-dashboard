<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    public function users(){
    	return $this->belongsToMany(\App\Models\User::class, 'user_services','service_id','user_id');
    }
}
