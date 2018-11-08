<?php

use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         DB::table('services')->truncate();
         DB::table('service_details')->truncate();

         DB::table('services')->insert(array (
           0 => array ('id' => 'SE1', 'description' => 'Service One'),
           1 => array ('id' => 'SE2', 'description' => 'Service Two'),
           2 => array ('id' => 'SE3', 'description' => 'Service Three')
         ));

         DB::table('service_details')->insert(array (
           0 => array ('id' => 'SD1', 'services_id' => 'SE1', 'description' => 'Service Detail One'),
           1 => array ('id' => 'SD2', 'services_id' => 'SE2', 'description' => 'Service Detail Two'),
           2 => array ('id' => 'SD3', 'services_id' => 'SE1', 'description' => 'Service Detail Three'),
           3 => array ('id' => 'SD4', 'services_id' => 'SE3', 'description' => 'Service Detail Four'),
           4 => array ('id' => 'SD5', 'services_id' => 'SE3', 'description' => 'Service Detail Five'),
           5 => array ('id' => 'SD6', 'services_id' => 'SE2', 'description' => 'Service Detail Six')
         ));
     }
}
