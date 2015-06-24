<?php
use App\Models\Post;

class PostTableSeeder extends DatabaseSeeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();
        $faker = Faker\Factory::create();

        for($i = 0; $i < 100; $i++) {
            $post = Post::create([
                'title'        => $faker->sentence(6),
                'slug' => $faker->slug(),
                'content'      => $faker->text(200),
                'featured_img' => $faker->imageUrl(400, 200),
                'status'       => $faker->randomElement([1,2]),
                'user_id'      => $faker->randomElement([1,2,3]),
                'category_id'  => $faker->randomElement([1,2,3])
            ]);
        }
    }

}
