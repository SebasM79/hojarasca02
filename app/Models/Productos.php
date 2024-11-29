<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    /**
     * Relación con el modelo Empleado
     */
    public function plantas()
    {
        return $this->hasMany(Plantas::class); // un cargo tiene muchos empleados
    }
}
