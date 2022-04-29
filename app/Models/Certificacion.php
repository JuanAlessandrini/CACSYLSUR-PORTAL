<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificacion extends Model
{
    use HasFactory;
    protected $fillable = ['nombre_curso', 'slug_curso', 'validez'];

    public function certificacion()
    {
        return $this->hasMany(Curso::class, 'id');
    }
}
