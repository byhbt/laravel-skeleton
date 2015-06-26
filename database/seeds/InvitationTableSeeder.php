<?php

use App\Models\Invitation;
use Illuminate\Database\Seeder;

class InvitationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('invitations')->truncate();
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Invitation::create([
                'title' => $faker->sentence(6),
                'address' => $faker->slug(),
                'latitude' => $faker->latitude,
                'longitude' => $faker->longitude,
                'phone' => $faker->phoneNumber,
                'level' => $faker->randomElement(['Mới biết chơi', 'Khá - Giỏi', 'Chuyên nghiệp']),
                'time' => $faker->randomElement(['5-7','7-9','6-8']),
                'description' => $faker->paragraph(4),
                'user_id' => $faker->randomElement(range(1, 30))
            ]);
        }
    }
}
