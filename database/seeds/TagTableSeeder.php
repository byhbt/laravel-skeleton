<?php
use App\Models\Tag;

class TagTableSeeder extends DatabaseSeeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->truncate();
        $faker = Faker\Factory::create();

        for($i = 0; $i < 30; $i++) {
            Tag::create([
                'name' => $faker->unique()->word,
            ]);
        }
    }

}
