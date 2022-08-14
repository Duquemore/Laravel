<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        //Another Ways with sql
        // DB::insert('INSERT INTO professions (title) VALUES (:title)',
        // ['title' => 'Desarrollador back-end']);

        DB::table('professions')->insert([
            'title' => 'Desarrollador Back-end',
        ]);   
        DB::table('professions')->insert([
            'title' => 'Desarrollador Front-end',
        ]);   
        DB::table('professions')->insert([
            'title' => 'Diseñador web',
        ]);   
    }
}
