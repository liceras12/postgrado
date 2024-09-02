<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    use HasFactory;

    protected $table = 'facultades';
    protected $primaryKey = 'id_facultad';
    public $timestamps = false;
    protected $fillable= ['id_area', 'nombre', 'nombre_abreviado' ,'direccion',
     'telefono', 'telefono_interno', 'fax', 'email', 'latitud', 'longitud',
      'fecha_creacion', 'escudo', 'imagen', 'estado_virtual', 'estado'];

    public function area()
    {
        return $this->belongsTo(Area::class, 'id_area');
    }
}
