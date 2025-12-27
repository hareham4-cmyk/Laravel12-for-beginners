<?php

namespace App\Models;

use App\Models\User;
use App\Models\Station;
use App\Models\WashingType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;
     protected $fillable = [
        'user_id',
        'station_id',
        'washing_type_id',
        'status',
    ];
     public function user() {
        return $this->belongsTo(User::class);
    }
    public function washing_type(){
        return $this->belongsTo(WashingType::class);
    }
    public function station(){
        return $this->belongsTo(Station::class);
    }
}
