<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paciente
 *
 * @property $id
 * @property $sexos_id
 * @property $estadociviles_id
 * @property $departamentos_id
 * @property $municipios_id
 * @property $familiares_id
 * @property $primer_nombre
 * @property $segundo_nombre
 * @property $tercer_nombre
 * @property $primer_apellido
 * @property $segundo_apellido
 * @property $apellido_casada
 * @property $dui
 * @property $fecha_nacimiento
 * @property $telefono
 * @property $direccion
 * @property $created_at
 * @property $updated_at
 *
 * @property Departamento $departamento
 * @property Estadocivile $estadocivile
 * @property Expediente[] $expedientes
 * @property Familiare $familiare
 * @property Municipio $municipio
 * @property Sexo $sexo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paciente extends Model
{
    
    static $rules = [
		'sexos_id' => 'required',
		'estadociviles_id' => 'required',
		'departamentos_id' => 'required',
		'municipios_id' => 'required',
		'familiares_id' => 'required',
		'primer_nombre' => 'required',
		'segundo_nombre' => 'required',
		'tercer_nombre' => 'required',
		'primer_apellido' => 'required',
		'segundo_apellido' => 'required',
		'apellido_casada' => 'required',
		'dui' => 'required',
		'fecha_nacimiento' => 'required',
		'telefono' => 'required',
		'direccion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['sexos_id','estadociviles_id','departamentos_id','municipios_id','familiares_id','primer_nombre','segundo_nombre','tercer_nombre','primer_apellido','segundo_apellido','apellido_casada','dui','fecha_nacimiento','telefono','direccion'];


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
    public function estadocivile()
    {
        return $this->hasOne('App\Models\Estadocivile', 'id', 'estadociviles_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function expedientes()
    {
        return $this->hasMany('App\Models\Expediente', 'pacientes_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function familiare()
    {
        return $this->hasOne('App\Models\Familiare', 'id', 'familiares_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function municipio()
    {
        return $this->hasOne('App\Models\Municipio', 'id', 'municipios_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sexo()
    {
        return $this->hasOne('App\Models\Sexo', 'id', 'sexos_id');
    }
    

}
