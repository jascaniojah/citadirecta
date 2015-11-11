<?php

namespace citadirecta;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    //
    protected $table = 'citas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','medico_id','fecha','hora','lista','nombre_paciente','nombre_medico'];
}
