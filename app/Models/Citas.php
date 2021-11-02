<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Citas
 * @package App\Models
 * @version October 31, 2021, 4:31 pm UTC
 *
 * @property integer $idpaciente
 * @property string $fechacita
 * @property string $id_doctor
 */
class Citas extends Model
{
    //use SoftDeletes;

    public $table = 'citas';

    protected $primaryKey='idcitas';
    public $timestamps= false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idpaciente',
        'fechacita',
        'id_doctor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcitas' => 'integer',
        'idpaciente' => 'integer',
        'fechacita' => 'date',
        'id_doctor' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idpaciente' => 'nullable|integer',
        'fechacita' => 'nullable',
        'id_doctor' => 'nullable|string|max:45'
    ];

    
}
