<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Doctor
 * @package App\Models
 * @version October 31, 2021, 4:33 pm UTC
 *
 * @property string $ap_nom
 * @property integer $dni
 * @property string $espesialidad
 */
class Doctor extends Model
{
    //use SoftDeletes;

    public $table = 'doctor';

    protected $primaryKey='iddoctor';
    public $timestamps= false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    //protected $dates = ['deleted_at'];



    public $fillable = [
        'ap_nom',
        'dni',
        'espesialidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'iddoctor' => 'integer',
        'ap_nom' => 'string',
        'dni' => 'integer',
        'espesialidad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ap_nom' => 'nullable|string|max:45',
        'dni' => 'nullable|integer',
        'espesialidad' => 'nullable|string|max:45'
    ];

    
}
