<?php

use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        for ($i=0; $i <10 ; $i++) {
            DB::table('empleados')->insert([
                'nombre' => str_random(10),
                'apellido1' => str_random(10),
                'apellido2' => str_random(10),
                'email' => str_random(10).'@'.str_random(5).'.com',
                'telefono' => rand(948000000,950000000),
                'created_at' => date("Y/m/d h:i:s"),
                'departamento_id' => rand(1, 40)]);
            }
        }
    }
