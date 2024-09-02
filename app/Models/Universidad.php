<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universidad extends Model
{
    use HasFactory;

    protected $table = 'universidades';
    protected $primaryKey = 'id_universidad';
    public $timestamps = false;
    protected $fillable = ['nombre','nombre_abreviado','inicial','estado'];

    public function configuraciones()
    {
        return $this->hasMany(Configuracion::class, 'id_universidad');
    }

    public function areas()
    {
        return $this->hasMany(Area::class, 'id_universidad');
    }
}
