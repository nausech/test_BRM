<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class productos
 * @package App\Models
 * @version June 29, 2019, 6:14 am UTC
 *
 * @property string pro_nombre
 * @property integer pro_cantidad
 * @property float pro_precio
 * @property string pro_lote
 * @property string pro_fecha_vencimiento
 */
class productos extends Model
{
    use SoftDeletes;

    public $table = 'productos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'pro_nombre',
        'pro_cantidad',
        'pro_precio',
        'pro_lote',
        'pro_fecha_vencimiento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'pro_nombre' => 'string',
        'pro_cantidad' => 'integer',
        'pro_precio' => 'double',
        'pro_lote' => 'string',
        'pro_fecha_vencimiento' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
