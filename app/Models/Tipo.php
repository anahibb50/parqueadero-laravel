<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;
    protected $table = 'tipos';
    protected $fillable = ['nombre'];
    //

    public function vehiculos(): HasMany
    {
        return $this->hasMany(Vehiculo::class);
    }

}
