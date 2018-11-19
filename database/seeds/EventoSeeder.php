<?php

use Illuminate\Database\Seeder;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=0; $i <10 ; $i++) {
          DB::table('eventos')->insert([
              'nombre' => str_random(10),
              'lugar' => str_random(10),
              'fechaInicio' => date("Y/m/d h:i:s"),
              'fechaFin' => date("Y/m/d h:i:s")]);
          }
      }
}
