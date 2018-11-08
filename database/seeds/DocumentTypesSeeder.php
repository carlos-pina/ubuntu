<?php

use Illuminate\Database\Seeder;

class DocumentTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         DB::table('document_types')->truncate();

         DB::table('document_types')->insert(array (
           0 => array ('id' => 'CED', 'document' => 'Cedula de Ciudadania'),
           1 => array ('id' => 'CEX', 'document' => 'Cedula de Extranjeria'),
           2 => array ('id' => 'PAS', 'document' => 'Pasaporte')
         ));
     }
}
