<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table("users")->insert([
            'id' => 1,
            'name' => "utilisateur 1",
            'email' => "utilisateur1@gmail.com",
            "password" => bcrypt("azerty")
        ]);

        DB::table("users")->insert([
            'id' => 2,
            'name' => "utilisateur 2",
            'email' => "utilisateur2@gmail.com",
            "password" => bcrypt("azerty")
        ]);

        DB::table('songs')->insert([
            'title' => 'chanson 1',
            'url' => 'https://file-examples-com.github.io/uploads/2017/11/file_example_MP3_700KB.mp3',
            'votes' => 1350,
            'user_id' => 1
        ]);

        DB::table('songs')->insert([
            'title' => 'chanson numéro deux',
            'url' => 'https://file-examples-com.github.io/uploads/2017/11/file_example_MP3_1MG.mp3',
            'votes' => 10050,
            'user_id' => 2
        ]);
    }
}
