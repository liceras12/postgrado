<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'personas';
    protected $primaryKey = 'id_persona';
    public $timestamps = false;
    protected $fillable = ['usuario','paterno','materno','nombres','nombre_rol','id_rol','fotografia','nomre_menu_principal','id_menu_principal'];
}
