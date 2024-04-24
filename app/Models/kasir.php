<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kasir extends Model
{
    use HasFactory;

    protected $table='kasirs';

    public $primaryKey = 'id_kasir';

    public $incrementing = true;

    protected $keyType = 'bigInteger';

    protected $guarded = [''];
}
