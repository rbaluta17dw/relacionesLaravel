<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableempleadoproyecto extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('empleado_proyecto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('empleado_id');
            $table->string('proyecto_id');
            $table->string('fechainicio');
            $table->string('fechafin');
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
        Schema::dropIfExists('empleado_proyecto');
    }
}
