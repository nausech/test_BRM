<?php

namespace App\Repositories;

use App\Models\productos;
use App\Repositories\BaseRepository;

/**
 * Class productosRepository
 * @package App\Repositories
 * @version June 29, 2019, 6:14 am UTC
*/

class productosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pro_nombre',
        'pro_cantidad',
        'pro_precio',
        'pro_lote',
        'pro_fecha_vencimiento'
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
        return productos::class;
    }
}
