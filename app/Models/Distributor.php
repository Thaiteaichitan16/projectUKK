<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    use HasFactory;

    protected $table='distributors';

    public $primaryKey = 'id';

    public $incrementing = true;

    protected $keyType = 'integer';

    protected $guarded = [''];
}
