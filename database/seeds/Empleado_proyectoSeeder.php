<?php

use Illuminate\Database\Seeder;

class Empleado_proyectoSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    for ($i=0; $i <10 ; $i++) {
      DB::table('empleado_proyecto')->insert([
        'empleado_id' => rand(1, 40),
        'proyecto_id' => rand(1, 40),
        'fechainicio' => date("Y/m/d h:i:s"),
        'fechafin' => date("Y/m/d h:i:s")]);
      }
    }
  }
