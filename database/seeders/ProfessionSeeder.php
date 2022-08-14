<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Profession;

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
        
        // Basic way with query builder
        // DB::table('professions')->insert([
        //     'title' => 'Desarrollador Back-end',
        // ]);   
        // DB::table('professions')->insert([
        //     'title' => 'Desarrollador Front-end',
        // ]);   
        // DB::table('professions')->insert([
        //     'title' => 'Diseñador web',
        // ]);   

        //Another way with Eloquent ORM Models
        Profession::create([
            'title' => 'Desarrollador Back-end',
        ]);
        Profession::create([
            'title' => 'Desarrollador Front-end',
        ]);
        Profession::create([
            'title' => 'Diseñador web',
        ]);

        Profession::factory(7)->create();
    }
}
