<?php

namespace citadirecta;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    //   protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
 protected $table = 'citas';

     */
    protected $fillable = ['nombre','direccion','especialidad','email'];
}
