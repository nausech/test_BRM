<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class facturas
 * @package App\Models
 * @version June 29, 2019, 6:53 am UTC
 *
 * @property integer fac_producto
 * @property integer fac_cliente
 * @property integer fac_cantidad
 * @property float fac_total
 */
class facturas extends Model
{
    use SoftDeletes;

    public $table = 'facturas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'fac_producto',
        'fac_cliente',
        'fac_cantidad',
        'fac_total'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fac_producto' => 'integer',
        'fac_cliente' => 'integer',
        'fac_cantidad' => 'integer',
        'fac_total' => 'double'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fac_producto' => 'fac_cliente integer text'
    ];

    
}
