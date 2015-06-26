<?php

use App\Models\Court;
use Illuminate\Database\Seeder;

class CourtTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courts')->truncate();
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Court::create([
                'name' => $faker->sentence(6),
                'slug' => $faker->slug(),
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'latitude' => $faker->latitude,
                'longitude' => $faker->longitude,
                'open_hour' => $faker->randomElement(['5-7','7-9','6-8']),
                'price' => $faker->randomElement(['50','60','80']),
                'website' => $faker->url,
                'facebook' => $faker->url,
                'user_id' => $faker->randomElement(range(1, 30))
            ]);
        }
    }
}
