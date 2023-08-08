<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumption extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['article', 'fabric', 'spk'];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function fabric()
    {
        return $this->belongsTo(Fabric::class);
    }

    public function spk()
    {
        return $this->belongsTo(Spk::class);
    }

    public function average()
    {
        return ($this->cons_s + $this->cons_m + $this->cons_l + $this->cons_xl + $this->cons_2xl + $this->cons_3xl) / 6;
    }
}
