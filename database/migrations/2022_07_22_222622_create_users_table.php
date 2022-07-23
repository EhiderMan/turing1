<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',30);
            $table->string('apellidop',20);
            $table->string('apellidom',20);
            $table->integer('telefono');
            $table->string('email',25);
            $table->float('salario',8,2);
            $table->integer('gerente_id');
            $table->integer('status');
            $table->string('nombre_usuario',25);
            $table->string('password',20);
            $table->foreignId('id_job_fk')->references('id')->on('jobs');
            $table->foreignId('id_department_fk')->references('id')->on('departments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
