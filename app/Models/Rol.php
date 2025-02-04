<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $primaryKey = 'id_rol';
    public $timestamps = false;

    protected $fillable = ['nombre', 'descripcion', 'estado'];

    public function rolesMenusPrincipales()
    {
        return $this->hasMany(RolMenuPrincipal::class, 'id_rol');
    }

}
