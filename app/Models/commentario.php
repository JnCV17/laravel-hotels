<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class commentario
 * @package App\Models
 * @version May 10, 2018, 7:30 pm UTC
 *
 * @property string contenido
 * @property integer id_usuario
 * @property integer id_hotel
 */
class commentario extends Model
{
    use SoftDeletes;

    public $table = 'commentarios';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'contenido',
        'id_usuario',
        'id_hotel',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'contenido' => 'string',
        'id_usuario' => 'integer',
        'id_hotel' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_usuario' => 'required',
        'id_hotel' => 'required'
    ];

    
}
