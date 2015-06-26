<?php

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->truncate();
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Event::create([
                'title' => $faker->sentence(6),
                'slug' => $faker->slug(),
                'time' => $faker->randomElement(['5-7','7-9','6-8']),
                'address' => $faker->address,
                'latitude' => $faker->latitude,
                'longitude' => $faker->longitude,
                'description' => $faker->paragraph(4),
                'website' => $faker->url,
                'facebook' => $faker->url,
                'user_id' => $faker->randomElement(range(1, 30))
            ]);
        }
    }
}
