<?php

class VideoTableSeeder extends DatabaseSeeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->truncate();

        $videos = [
            [
                'youtube_id'   => '21E3SLSV-Ys',
                'title'   => 'Chen Long vs Viktor Axelsen - Badminton 2015',
                'description' => 'Nam nec volutpat diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed facilisis lectus varius quam rhoncus imperdiet nec vitae nibh. Nunc rhoncus eros quis ultrices lobortis. '
            ],
            [
                'youtube_id'   => 'iQoWiRJZ29M',
                'title'   => 'India vs Malaysia | Day 2 - VIVO BWF Sudirman Cup 2015',
                'description' => 'Nam nec volutpat diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed facilisis lectus varius quam rhoncus imperdiet nec vitae nibh. Nunc rhoncus eros quis ultrices lobortis. '
            ],
            [
                'youtube_id'   => '7ap-XeeHOkM',
                'title'   => 'China vs Japan | F - VIVO BWF Sudirman Cup 2015',
                'description' => 'Nam nec volutpat diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed facilisis lectus varius quam rhoncus imperdiet nec vitae nibh. Nunc rhoncus eros quis ultrices lobortis. '
            ],
            [
                'youtube_id'   => 'qdnVzjbh9PQ',
                'title'   => 'Malaysia Open 2015 Final [MD] Mohammad A. /Hendra S. vs L.Yong Dae /Y.Yeon Seong',
                'description' => 'Nam nec volutpat diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed facilisis lectus varius quam rhoncus imperdiet nec vitae nibh. Nunc rhoncus eros quis ultrices lobortis. '
            ],
            [
                'youtube_id'   => 'm3ld6g9XycY',
                'title'   => 'China vs Germany | Day 1 - VIVO BWF Sudirman Cup 2015',
                'description' => 'Nam nec volutpat diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed facilisis lectus varius quam rhoncus imperdiet nec vitae nibh. Nunc rhoncus eros quis ultrices lobortis. '
            ],
            [
                'youtube_id'   => 'EKdjrcfh4Hk',
                'title'   => 'Quisque nec erat lectus',
                'description' => 'Nam nec volutpat diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed facilisis lectus varius quam rhoncus imperdiet nec vitae nibh. Nunc rhoncus eros quis ultrices lobortis. '
            ],
            [
                'youtube_id'   => 'RFgGh1rvwBE',
                'title'   => '[HD] Final - Badminton Asia Champs 2015 - Tian Houwei vs Lin Dan',
                'description' => 'Nam nec volutpat diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed facilisis lectus varius quam rhoncus imperdiet nec vitae nibh. Nunc rhoncus eros quis ultrices lobortis. '
            ],
            [
                'youtube_id'   => 'YjrMB_GZCUQ',
                'title'   => 'Lin Dan vs Chou Tien Chen [Denmark Open 2014]',
                'description' => 'Nam nec volutpat diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed facilisis lectus varius quam rhoncus imperdiet nec vitae nibh. Nunc rhoncus eros quis ultrices lobortis. '
            ],
            [
                'youtube_id'   => 'GFYJ-XoiwoQ',
                'title'   => '[HD] SF - 2014 Asian Games - MS - LIN Dan vs LEE Chong Wei',
                'description' => 'Nam nec volutpat diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed facilisis lectus varius quam rhoncus imperdiet nec vitae nibh. Nunc rhoncus eros quis ultrices lobortis. '
            ],
            [
                'youtube_id'   => 'gSIuplM93Vg',
                'title'   => '[TCH] Lee Chong Wei - Great Speed - Skill Badminton Dan Lin',
                'description' => 'Nam nec volutpat diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed facilisis lectus varius quam rhoncus imperdiet nec vitae nibh. Nunc rhoncus eros quis ultrices lobortis. '
            ],
            [
                'youtube_id'   => '8WL57ZbZFJw',
                'title'   => 'F - 2014 BWF World Championships - Lee Chong Wei vs Chen Long',
                'description' => 'Nam nec volutpat diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed facilisis lectus varius quam rhoncus imperdiet nec vitae nibh. Nunc rhoncus eros quis ultrices lobortis. '
            ],
            [
                'youtube_id'   => 'HeGAQAt72iw',
                'title'   => 'Lee Chong Wei-The Never Give Up Warrior Part 1',
                'description' => 'Nam nec volutpat diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed facilisis lectus varius quam rhoncus imperdiet nec vitae nibh. Nunc rhoncus eros quis ultrices lobortis. '
            ],
            [
                'youtube_id'   => '_gY640fF3cE',
                'title'   => 'Sudirman Cup 2015 QF [G1] LEE Chong Wei vs Son Wan Ho',
                'description' => 'Nam nec volutpat diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed facilisis lectus varius quam rhoncus imperdiet nec vitae nibh. Nunc rhoncus eros quis ultrices lobortis. '
            ],
            [
                'youtube_id'   => 'd4B9z_WJAKs',
                'title'   => 'Fu haifeng -The art of Smashing - Badminton Jump Smash',
                'description' => 'Nam nec volutpat diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed facilisis lectus varius quam rhoncus imperdiet nec vitae nibh. Nunc rhoncus eros quis ultrices lobortis. '
            ],
            [
                'youtube_id'   => '8QlW8_PdYbw',
                'title'   => 'Badminton Technique - Forehand Smash',
                'description' => 'Nam nec volutpat diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed facilisis lectus varius quam rhoncus imperdiet nec vitae nibh. Nunc rhoncus eros quis ultrices lobortis. '
            ],
        ];

        DB::table('videos')->insert($videos);
    }

}
