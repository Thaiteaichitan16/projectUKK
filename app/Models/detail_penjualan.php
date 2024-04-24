<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deitail_penjualan extends Model
{
    use HasFactory;

    protected $table='detail_penjualans';

    public $primaryKey = 'id';

    public $incrementing = true;

    protected $keyType = 'bigInteger';

    protected $guarded = [''];
}
