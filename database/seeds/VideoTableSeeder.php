<?php
use App\Models\Video;

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
            '21E3SLSV-Ys',
            'iQoWiRJZ29M',
            '7ap-XeeHOkM',
            'qdnVzjbh9PQ',
            'm3ld6g9XycY',
            'EKdjrcfh4Hk',
            'RFgGh1rvwBE',
            'YjrMB_GZCUQ',
            'GFYJ-XoiwoQ',
            'gSIuplM93Vg',
            '8WL57ZbZFJw',
            'HeGAQAt72iw',
            '_gY640fF3cE',
            'd4B9z_WJAKs',
            '8QlW8_PdYbw',
            'Ar0x-jC7gl4',
            'eH6qFJoySf8',
            'euoiYTR284Y',
            'yLerTXg1jXI',
            'S1cufMC4se0',
            'aoSRxe_iHmg',
            'We8pAyeobGY',
            'd59I52u2A8E',
            'HA1sOLxvQow'
        ];

        $faker = Faker\Factory::create();

        foreach($videos as $video) {
            $video = Video::create([
                'youtube_id' => $video,
                'title' => $faker->unique()->sentence(5),
                'slug' => $faker->slug(),
                'description' => $faker->text(100),
                'category_id' => $faker->randomElement([1,2,3])
            ]);
        }
    }

}
