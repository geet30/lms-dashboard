<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanEicContent extends Model
{
    use HasFactory;
    protected $table = 'plan_eic_content';

    protected $fillable = ['plan_id','type','content','status'];
}
