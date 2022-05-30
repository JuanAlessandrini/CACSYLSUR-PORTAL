<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Certificacion
 *
 * @property $id
 * @property $nombre_curso
 * @property $slug_curso
 * @property $validez
 * @property $created_at
 * @property $updated_at
 *
 * @property Curso[] $cursos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Certificacion extends Model
{

  static $rules = [
    'nombre_curso' => 'required',
    'validez' => 'required'
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['nombre_curso', 'slug_curso', 'validez'];


  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function cursos()
  {
    return $this->hasMany('App\Models\Inscripcione', 'grupo_id', 'id');
  }
}
