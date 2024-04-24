<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;

    protected $table='bukus';

    public $primaryKey = 'id_buku';

    public $incrementing = true;

    protected $keyType = 'integer';

    protected $guarded = [''];

}
