<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Usuario
 * @package App\Models
 * @version October 31, 2021, 4:35 pm UTC
 *
 * @property string $ap_nom
 * @property string $usuario
 * @property integer $password
 */
class Usuario extends Model
{
    //use SoftDeletes;

    public $table = 'usuario';

    protected $primaryKey='idusuario';
    public $timestamps= false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ap_nom',
        'usuario',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idusuario' => 'integer',
        'ap_nom' => 'string',
        'usuario' => 'string',
        'password' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ap_nom' => 'nullable|string|max:45',
        'usuario' => 'nullable|string|max:45',
        'password' => 'nullable|integer'
    ];

    
}
