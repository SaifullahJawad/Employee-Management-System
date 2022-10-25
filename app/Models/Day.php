<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function getDateAttribute($date)
    {
        return Carbon::parse($date)->format('Y-m-d');
        
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
