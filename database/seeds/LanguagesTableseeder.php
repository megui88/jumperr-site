<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            [
                'code'           => 'es',
                'name'           => 'Español',
            ],
            [
                'code'           => 'it',
                'name'           => 'Italiano',
            ],
            [
                'code'           => 'en',
                'name'           => 'English',
            ],
            [
                'code'           => 'po',
                'name'           => 'Portugués',
            ],
            [
                'code'           => 'fr',
                'name'           => 'Francés',
            ]
        ]);
    }
}