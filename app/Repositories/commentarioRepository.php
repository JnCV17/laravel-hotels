<?php

namespace App\Repositories;

use App\Models\commentario;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class commentarioRepository
 * @package App\Repositories
 * @version May 10, 2018, 7:30 pm UTC
 *
 * @method commentario findWithoutFail($id, $columns = ['*'])
 * @method commentario find($id, $columns = ['*'])
 * @method commentario first($columns = ['*'])
*/
class commentarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'contenido',
        'id_usuario',
        'id_hotel'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return commentario::class;
    }
}
