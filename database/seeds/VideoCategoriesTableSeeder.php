<?php

class VideoCategoriesTableSeeder extends DatabaseSeeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('video_categories')->truncate();

        $categories = [
            'Match',
            'Training',
            'Mix'
        ];

        foreach ($categories as $category) {
            DB::table('video_categories')->insert(['name' => $category]);
        }
    }

}
