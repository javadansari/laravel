<?php

use Illuminate\Database\Seeder;

class Items extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();

        for($i=0; $i<=100; $i++):
            DB::table('items')
                ->insert([
                    'name' => $faker->sentence,
                    'slug' => $faker->slug,
                    'content' => $faker->paragraph,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
        endfor;

    }
}
