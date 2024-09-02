<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VPersonaMenuPrincipal extends Model
{
    protected $table = 'persona';
    protected $primaryKey = 'id_persona';
    public $timestamps = false;


    protected $fillable = [
        'id_persona',
        'usuario',
        'password',
        'paterno',
        'materno',
        'nombres',
        'nombre_rol',
        'id_rol',
        'fotografia',
        'nombre_menu_principal',
        'id_menu_principal'
    ];

    /**
     * Definir las relaciones necesarias, si existen.
     * Por ejemplo, si existe una relación con el modelo Menu:
     */
    public function menuPrincipal()
    {
        return $this->belongsTo(MenuPrincipal::class, 'id_menu_principal');
    }
    //public function menus()
   // {
   //     return $this->hasMany(Menu::class, 'id_menu_principal', 'id_menu_principal');
   // }
}
