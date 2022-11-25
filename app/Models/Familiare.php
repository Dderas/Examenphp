<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Familiare
 *
 * @property $id
 * @property $departamentos_id
 * @property $municipios_id
 * @property $Nombre
 * @property $Apellido
 * @property $Parentesco
 * @property $created_at
 * @property $updated_at
 *
 * @property Departamento $departamento
 * @property Municipio $municipio
 * @property Paciente[] $pacientes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Familiare extends Model
{
    
    static $rules = [
		'departamentos_id' => 'required',
		'municipios_id' => 'required',
		'Nombre' => 'required',
		'Apellido' => 'required',
		'Parentesco' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['departamentos_id','municipios_id','Nombre','Apellido','Parentesco'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departamento()
    {
        return $this->hasOne('App\Models\Departamento', 'id', 'departamentos_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function municipio()
    {
        return $this->hasOne('App\Models\Municipio', 'id', 'municipios_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pacientes()
    {
        return $this->hasMany('App\Models\Paciente', 'familiares_id', 'id');
    }
    

}
