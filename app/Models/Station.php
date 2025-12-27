<?php

namespace App\Models;

use App\Models\Booking;
use App\Models\WorkTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Station extends Model
{
    use HasFactory;
     protected $fillable = [
        'name',
        'parent_id',
        'longitude',
        'latitude',
        'worktime_id'
    ];
    public function bookings(){
        return $this->hasMany(Booking::class);
    }
    public function worktime(){
        return $this->belongsTo(WorkTime::class);
    }
    public function parent(){
        return $this->belongsTo(Station::class , 'parent_id');
    }
    public function children(){
        return $this->hasMany(Station::class, 'parent_id');
    }
}
