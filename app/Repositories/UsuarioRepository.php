<?php

namespace App\Repositories;

use App\Models\Usuario;
use App\Repositories\BaseRepository;

/**
 * Class UsuarioRepository
 * @package App\Repositories
 * @version October 31, 2021, 4:35 pm UTC
*/

class UsuarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ap_nom',
        'usuario',
        'password'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Usuario::class;
    }
}
