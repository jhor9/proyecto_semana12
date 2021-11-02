<?php

namespace App\Repositories;

use App\Models\Citas;
use App\Repositories\BaseRepository;

/**
 * Class CitasRepository
 * @package App\Repositories
 * @version October 31, 2021, 4:31 pm UTC
*/

class CitasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idpaciente',
        'fechacita',
        'id_doctor'
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
        return Citas::class;
    }
}
