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
    
    // public function scopeFilter($query, array $filters)
    // {
    //     $query->when($filters['spk'] ?? false, function ($query, $spk) {
    //         return $query->whereHas('spk', function ($query) use ($spk) {
    //             $query->where('no_spk', $spk);
    //         });
    //     });
    // }
    
}
