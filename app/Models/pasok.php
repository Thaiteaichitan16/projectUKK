<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasok extends Model
{
    use HasFactory;

    protected $table='pasoks';

    public $primaryKey = 'id_pasok';

    public $incrementing = true;

    protected $keyType = 'integer';

    protected $guarded = [''];
}
