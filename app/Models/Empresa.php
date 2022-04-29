<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $fillable = ['nombre_empresa', 'cuit'];
    public function empresa()
    {
        return $this->hasMany(Alumno::class, 'id');
    }
}
