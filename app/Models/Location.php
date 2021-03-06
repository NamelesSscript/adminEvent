<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['description','nbr_place','reserved'];
    use HasFactory;

    public function demandes()
    {
        return $this->hasMany(Demande::class);
    }
}
