<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Profession;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Another Ways with sql
        // $professions = DB::select('SELECT * FROM professions WHERE title = ? LIMIT 0,1', ['Desarrollador back-end']);
        // $professions = DB::select('SELECT * FROM professions LIMIT 0,1');

        //Another ways with query builder
        // $profession = DB::table('professions')->select('id')->take(1)->get()->first();
        // $profession = DB::table('professions')->select('id')->first();

        // DB::table('users')->insert([
        //     'name' => 'alvaro diaz',
        //     'email' => 'alvaro@gmail.com',
        //     'password' => bcrypt('123456'),
        //     'profession_id' => $professions->id,
        // ]);

        // $professionid = DB::table('professions')->where(['title' => 'Desarrollador back-end'])->value('id');
        
        // DB::table('users')->insert([
        //     'name' => 'alvaro diaz',
        //     'email' => 'alvaro@gmail.com',
        //     'password' => bcrypt('123456'),
        //     'profession_id' => $professionid
        // ]);

        //Another ways with query builder
        // DB::table('users')->insert([
        //     'name' => 'alvaro diaz',
        //     'email' => 'alvaro@gmail.com',
        //     'password' => bcrypt('123456'),
        //     'profession_id' => '1',
        // ]);
        
        // DB::table('users')->insert([
        //     'name' => 'lizeth gomez',
        //     'email' => 'lizeth@gmail.com',
        //     'password' => bcrypt('123456'),
        //     'profession_id' => '2',
        // ]);
        
        // DB::table('users')->insert([
        //     'name' => 'lucas roman',
        //     'email' => 'luro@gmail.com',
        //     'password' => bcrypt('123456'),
        //     'profession_id' => '3',
        // ]);

        //Another way using Eloquent ORM

        $professionid = Profession::where('title', 'Desarrollador back-end')->value('id');     

        User::create([
            'name' => 'alvaro diaz',
            'email' => 'alvaro@gmail.com',
            'password' => bcrypt('123456'),
            'profession_id' =>  $professionid,
        ]);
        
        User::factory()->create([
            'profession_id' => $professionid,
        ]);

        User::factory(8)->create();
    }
}
