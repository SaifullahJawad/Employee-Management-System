<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);

    }


    public function checkIn()
    {
        if(Report::whereDate('check_in', Carbon::now()->toDateString())
        ->where('user_id', auth()->user()->id)
        ->first() ?? false)
        {
            //trying to check-in twice in a single day
            return abort(403);
        }
        
        
        if ($day = Day::whereDate('date', Carbon::now()->toDateString())->first() ?? false)
        {
            return $this->reports()->create([
                'day_id' => $day->id,
                'check_in' => Carbon::now()->toDateTime()
            ]);
        }
        
        $day = Day::create([
            'date' => Carbon::now()->toDateTime()
        ]);

        return $this->reports()->create([
            'day_id' => $day->id,
            'check_in' => Carbon::now()->toDateTime()
        ]);
        
        

    }


    public function checkOut()
    {
        $report = Report::whereDate('check_in', Carbon::now()->toDateString())
        ->where('user_id', auth()->user()->id)
        ->first() ?? abort(403); //if tries to check-out without checking-in

        if($report->check_out !== null)
        {
            //trying to check-out twice in a single day
            return abort(403);
        }
        
        
        return $report->update([
            'check_out' => Carbon::now()->toDateTime()
        ]);


    }


    //relationship
    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
