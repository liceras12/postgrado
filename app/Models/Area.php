<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $table = 'areas';
    protected $primaryKey = 'id_area';
    public $timestamps = false;
    protected $fillable = ['id_universidad', 'nombre', 'nombre_abreviado', 'estado'];

    public function universidad()
    {
        return $this->belongsTo(Universidad::class, 'id_universidad');
    }

    public function facultades()
    {
        return $this->hasMany(Facultad::class, 'id_area');
    }
}
