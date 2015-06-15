<?php

class VideoTagTableSeeder extends DatabaseSeeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tag_video')->truncate();
        $faker = Faker\Factory::create();

        for($i = 1; $i < 100; $i++) {
            DB::table('tag_video')->insert([
                'video_id' => $faker->randomElement(range(1,30)),
                'tag_id' => $faker->randomElement(range(1,30))
            ]);
        }
    }

}
