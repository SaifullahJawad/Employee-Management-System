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
        
        if ($day = Day::whereDate('date', Carbon::now()->toDateString())->first() ?? false)
        {
            return $day->reports()->create([
                'user_id' => auth()->user()->id,
                'check_in' => Carbon::now()->toDateTime()
            ]);
        }
        
        $day = Day::create([
            'date' => Carbon::now()->toDateTime()
        ]);

        return $day->reports()->create([
            'user_id' => auth()->user()->id,
            'check_in' => Carbon::now()->toDateTime()
        ]);

    }



    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
