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
        $document = ['id' => 'CED', 'document' => 'Cedula de Ciudadania'];
        DB::table('document_types')->insert($document);
        $document = ['id' => 'CEX', 'document' => 'Cedula de Extranjeria'];
        DB::table('document_types')->insert($document);
        $document = ['id' => 'PAS', 'document' => 'Pasaporte'];
        DB::table('document_types')->insert($document);
    }
}
