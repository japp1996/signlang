<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Video;

class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $videos = [
            [
                "name" => "Modulo 1 Tomo 1",
                "url" => "https://www.youtube.com/embed/-P-uDSykdmQ?controls=0&rel=0&modestbranding=1&iv_load_policy=3&disablekb=1&color=blue",
            ],
            [
                "name" => "Modulo 2 Tomo 1",
                "url" => "https://www.youtube.com/embed/8_9LJ1t_47M??controls=0&rel=0&modestbranding=1&iv_load_policy=3&disablekb=1&color=blue",
            ],
            [
                "name" => "Módulo 3 Tomo 1",
                "url" => "https://www.youtube.com/embed/zxL7YwFOeXw??controls=0&rel=0&modestbranding=1&iv_load_policy=3&disablekb=1&color=blue",
            ],
        ];

        foreach ($videos as $video) {
            $newVideo = new Video;
            $newVideo->name = $video["name"];
            $newVideo->url = $video["url"];
            $newVideo->save();
        }
    }
}