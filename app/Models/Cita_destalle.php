<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cita_destalle
 * @package App\Models
 * @version October 31, 2021, 4:28 pm UTC
 *
 * @property integer $idcita
 */
class Cita_destalle extends Model
{
    //use SoftDeletes;

    public $table = 'cita_destalle';

    protected $primaryKey='idcita_destalle';
    public $timestamps= false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idcita'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcita_destalle' => 'integer',
        'idcita' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idcita' => 'nullable|integer'
    ];

    
}
