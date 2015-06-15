<?php

class PostTagTableSeeder extends DatabaseSeeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_tag')->truncate();
        $faker = Faker\Factory::create();

        for($i = 1; $i < 100; $i++) {
            DB::table('post_tag')->insert([
                'post_id' => $faker->randomElement(range(1,100)),
                'tag_id' => $faker->randomElement(range(1,30))
            ]);
        }
    }

}
