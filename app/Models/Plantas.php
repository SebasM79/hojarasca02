<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plantas extends Model

{
    use HasFactory;

    protected $fillable = ['nombre', 'tipo', 'fecha_ingreso', 'importe',  'activo', 'email', 'producto_id']; // estos son los campos que se pueden asignar masivamente


    public function Productos()

    {
        return $this->belongsTo(Productos::class); // una planta pertenece a un producto planta
    }
}
