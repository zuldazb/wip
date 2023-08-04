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
}
