<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_desa',
        'name',
        'code',
        'district_id',
    ];

    public function bankers() {
        return $this->hasMany(Banker::class);
    }
}
