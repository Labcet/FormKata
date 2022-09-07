<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CasosPruebas extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','funcionalidad','tipo_prueba','precondiciones','pasos','ola','resultado','aprobador'];

    public $table = "casos_prueba";

    public $timestamps = false;
}
