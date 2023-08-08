<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forecast extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['article'];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function spk_s()
    {
        return $this->hasMany(SPK::class);
    }

    public function total()
    {
        return $this->fc_s + $this->fc_m + $this->fc_l + $this->fc_xl + $this->fc_2xl + $this->fc_3xl;
    }
}
