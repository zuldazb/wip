<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['forecast', 'makloon'];

    public function consumptions()
    {
        return $this->hasMany(Consumption::class);
    }

    public function forecast()
    {
        return $this->belongsTo(Forecast::class);
    }

    public function makloon()
    {
        return $this->belongsTo(Makloon::class);
    }

    public function total()
    {
        return $this->spk_s + $this->spk_m + $this->spk_l + $this->spk_xl + $this->spk_2xl + $this->spk_3xl;
    }

    public function coba()
    {
    }
}
