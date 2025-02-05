<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class coches extends Model
{
    protected $primaryKey = 'matricula';
    public $incrementing = false;
    protected $keyType = 'string';
}

