<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class hotel
 * @package App\Models
 * @version May 10, 2018, 7:26 pm UTC
 *
 * @property string nombre
 * @property string ciudad
 * @property integer costo_habitacion
 * @property integer estrellas
 * @property string direccion
 */
class hotel extends Model
{
    use SoftDeletes;

    public $table = 'hotels';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'ciudad',
        'costo_habitacion',
        'estrellas',
        'calificacion',
        'direccion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'ciudad' => 'string',
        'costo_habitacion' => 'integer',
        'estrellas' => 'integer',
        'calificacion' => 'integer',
        'direccion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'costo_habitacion' => 'numeric',
        'estrellas' => 'numeric',
        'calificacion' => 'numeric'
    ];

    
}
