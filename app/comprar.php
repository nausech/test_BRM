<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comprar extends Model
{
    protected $table = 'facturas';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
