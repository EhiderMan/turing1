<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    use HasFactory;

    protected $table='jobs';

    protected $fillable=['nombre_job','salario_min','salario_max','status'];    
}
