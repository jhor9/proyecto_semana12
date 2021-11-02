<?php

namespace App\Repositories;

use App\Models\Cita_destalle;
use App\Repositories\BaseRepository;

/**
 * Class Cita_destalleRepository
 * @package App\Repositories
 * @version October 31, 2021, 4:28 pm UTC
*/

class Cita_destalleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcita'
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
        return Cita_destalle::class;
    }
}
