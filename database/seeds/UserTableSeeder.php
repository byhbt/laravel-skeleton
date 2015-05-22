<?php

class UserTableSeeder extends DatabaseSeeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'email'       => 'admin@admin.com',
            'name'  => 'Admin',
            'password'    => Hash::make('123456'),
        ];
        
        DB::table('users')->insert($users);
    }

}
