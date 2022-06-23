<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banker extends Model
{
    use HasFactory;

    protected $fillable = [
        'value',
        'village_id',
        'subcategory_id',
        'year',
    ];

    public function subcategory() {
        return $this->belongsTo(Subcategory::class);
    }

    public function village() {
        return $this->belongsTo(Village::class);
    }
}
