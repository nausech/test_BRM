<?php

namespace App\Repositories;

use App\Models\facturas;
use App\Repositories\BaseRepository;

/**
 * Class facturasRepository
 * @package App\Repositories
 * @version June 29, 2019, 6:53 am UTC
*/

class facturasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fac_producto',
        'fac_cliente',
        'fac_cantidad',
        'fac_total'
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
        return facturas::class;
    }
}
