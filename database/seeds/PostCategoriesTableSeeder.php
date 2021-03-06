<?php

class PostCategoriesTableSeeder extends DatabaseSeeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_categories')->truncate();

        $categories = [
            'Vietnam',
            'International',
            'Touraments',
            'Other'
        ];

        $faker = Faker\Factory::create();
        foreach ($categories as $category) {
            DB::table('post_categories')->insert([
                'name' => $category,
                'slug' => $faker->slug()
            ]);
        }
    }

}
