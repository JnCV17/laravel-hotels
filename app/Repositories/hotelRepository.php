<?php

namespace App\Repositories;

use App\Models\hotel;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class hotelRepository
 * @package App\Repositories
 * @version May 10, 2018, 7:26 pm UTC
 *
 * @method hotel findWithoutFail($id, $columns = ['*'])
 * @method hotel find($id, $columns = ['*'])
 * @method hotel first($columns = ['*'])
*/
class hotelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'ciudad',
        'costo_habitacion',
        'estrellas',
        'direccion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return hotel::class;
    }
}
