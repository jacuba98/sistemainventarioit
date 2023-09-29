<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = ['tipo'];

    public function empleados()
    {
        return $this->belongsToMany(Empleado::class, 'empleado_equipo');
    }
}