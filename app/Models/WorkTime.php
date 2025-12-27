<?php

namespace App\Models;

use App\Models\Station;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkTime extends Model
{
    use HasFactory;
   protected $fillable =[
    'from' ,
    'to'
   ];
   public function stations(){
    return $this->hasMany(Station::class);
   }
}
