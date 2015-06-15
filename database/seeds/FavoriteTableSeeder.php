<?php

class FavoriteTableSeeder extends DatabaseSeeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('favorites')->truncate();
        $faker = Faker\Factory::create();

        for($i = 1; $i < 50; $i++) {
            DB::table('favorites')->insert([
                'video_id' => $faker->randomElement(range(1,22)),
                'user_id' => $faker->randomElement(range(1,100))
            ]);
        }
    }

}
