<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Curso
 *
 * @property $id
 * @property $nombre_grupo
 * @property $mes_dictado
 * @property $anio_dictado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Curso extends Model
{

  static $rules = [
    'nombre_grupo' => 'required',
    'anio_dictado' => 'required',
    'certificacion_id'=>'required'
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['nombre_grupo', 'certificacion_id', 'anio_dictado'];
  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function certificado()
  {
    return $this->hasOne('App\Models\Certificacion', 'id', 'certificacion_id');
  }
}
