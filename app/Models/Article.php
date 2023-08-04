<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function forecasts()
    {
        return $this->hasMany(Forecast::class);
    }

    public function consumptions()
    {
        return $this->hasMany(Consumption::class);
    }

}
