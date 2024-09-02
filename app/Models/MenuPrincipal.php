<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuPrincipal extends Model
{
    use HasFactory;

    protected $table = 'menus_principales';
    protected $primaryKey = 'id_menu_principal';
    public $timestamps = false;

    protected $fillable = ['id_modulo', 'nombre', 'icono', 'orden', 'estado'];

    public function modulo()
    {
        return $this->belongsTo(Modulo::class, 'id_modulo');
    }

    public function menus()
    {
        return $this->hasMany(Menu::class, 'id_menu_principal');
    }
}
