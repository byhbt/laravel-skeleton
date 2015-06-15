<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::disableQueryLog();
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        $this->call('UserTableSeeder');
        $this->call('PostCategoriesTableSeeder');
        $this->call('PostTableSeeder');
        $this->call('VideoCategoriesTableSeeder');
        $this->call('VideoTableSeeder');
        $this->call('TagTableSeeder');
        $this->call('PostTagTableSeeder');
        $this->call('VideoTagTableSeeder');
        $this->call('FavoriteTableSeeder');

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }

}
