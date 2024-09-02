<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';
    protected $primaryKey = 'id_menu';
    public $timestamps = false;

    protected $fillable = ['id_menu_principal', 'nombre', 'directorio', 'icono', 'imagen', 'color', 'orden', 'estado'];

    public function menuPrincipal()
    {
        return $this->belongsTo(MenuPrincipal::class, 'id_menu_principal');
    }
}
