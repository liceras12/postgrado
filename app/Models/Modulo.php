<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    use HasFactory;

    protected $table = 'modulos';
    protected $primaryKey = 'id_modulo';
    public $timestamps = false;

    protected $fillable = ['nombre', 'estado'];

    public function menusPrincipales()
    {
        return $this->hasMany(MenuPrincipal::class, 'id_modulo');
    }
}
