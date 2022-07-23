<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;

    protected $table='users';

    protected $fillable=['nombre','apellidop','apellidom','telefono','email',
    'salario','gerente_id','status','nombre_usuario',
'password','id_job_fk','id_department_fk'];

    public function departments()
    {
      return $this->belongsTo ('APP\departments','id_department_fk','id');
    }   
    public function jobs()
    {
      return $this->belongsTo ('APP\jobs','id_job_fk','id');
    }
}
