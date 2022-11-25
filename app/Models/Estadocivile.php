<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estadocivile
 *
 * @property $id
 * @property $nombre_estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Paciente[] $pacientes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estadocivile extends Model
{
    
    static $rules = [
		'nombre_estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pacientes()
    {
        return $this->hasMany('App\Models\Paciente', 'estadociviles_id', 'id');
    }
    

}
