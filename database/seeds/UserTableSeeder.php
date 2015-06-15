<?php
use App\Models\User;

class UserTableSeeder extends DatabaseSeeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('users')->truncate();

        // Master user
        $users = [
            'email'    => 'admin@admin.com',
            'name'     => 'Admin',
            'password' => Hash::make('123456')
        ];

        DB::table('users')->insert($users);

        // Create sample user
        for($i = 0; $i < 100; $i++) {

            $user = User::create([
                'email'    => $faker->email,
                'name'     => $faker->userName,
                'password' => Hash::make('123456')
            ]);
        }
    }

}
