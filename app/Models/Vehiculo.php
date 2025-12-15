<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    protected $table = 'vehiculos';
    protected $fillable = ['placa', 'tipo_id', 'propietario', 'observaciones'];
    public function tipo(): BelongsTo
    {
        return $this->belongsTo(Tipo::class,'tipo_id');
    }

    public static function getVehiculos(){
        return self::with('tipo')->get();
    }

    public static function crearVehiculo($data){
        return self::create($data);
    }

    public static function actualizarVehiculo($id, $data){
         $vehiculo=self::find($id);
        if($vehiculo==null){
            return false;
        }
        $vehiculo->update($data);
        return $vehiculo;
    }

    public static function eliminarVehiculo($id){
        $vehiculo=self::find($id);
        if($vehiculo==null){
            return false;
        }
        return $vehiculo->delete();
    }

    public static function getVehiculoById($id){
        return self::with('tipo')->find($id);
    }

    
}
