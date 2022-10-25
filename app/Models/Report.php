<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['employee', 'day'];


    public function getCheckIn()
    {
        return Carbon::parse($this->check_in)->format('g:i a');
    }


    public function getCheckout()
    {
        return Carbon::parse($this->check_out)->format('g:i a');
    }

    
    public function calculateOfficeHour()
    {
        if($this->check_out ?? false && $this->check_in ?? false)
        {
            return Carbon::parse($this->check_in)->diffInHours(Carbon::parse($this->check_out));
        }
        
    }


    public function scopeFilter($query, $filter)
    {
        if($filter)
        {
            $query->where('day_id', $filter);
        }
        else
        {
            $query->where('day_id', Day::latest()->first()->id);
        }
        
    }
    
    
    public function employee()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function day()
    {
        return $this->belongsTo(Day::class);
    }
}
