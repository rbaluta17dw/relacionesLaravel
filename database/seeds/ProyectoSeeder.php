<?php

use Illuminate\Database\Seeder;

class ProyectoSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    for ($i=0; $i <10 ; $i++) {
      DB::table('proyectos')->insert([
        'nombre' => str_random(10),
        'titulo' => str_random(10),
        'fechainicio' => date("Y/m/d h:i:s"),
        'fechafin' => date("Y/m/d h:i:s"),
        'horasestimadas' => rand(4, 50),
        'empleado_id' => rand(1, 40)]);
      }
    }
  }
