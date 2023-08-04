<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabric extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function consumptions(){
        return $this->hasMany(Forecast::class);
    }
}
