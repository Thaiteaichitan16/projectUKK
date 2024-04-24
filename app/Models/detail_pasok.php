<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_pasok extends Model
{
    use HasFactory;

    protected $table='detail_pasoks';

    public $primaryKey = 'id';

    public $incrementing = true;

    protected $keyType = 'bigInteger';

    protected $guarded = [''];
}
