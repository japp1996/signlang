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
                "url" => "https://www.youtube.com/embed/-P-uDSykdmQ",
            ],
            [
                "name" => "Modulo 2 Tomo 1",
                "url" => "https://www.youtube.com/embed/8_9LJ1t_47M",
            ],
            [
                "name" => "Módulo 3 Tomo 1",
                "url" => "https://www.youtube.com/embed/zxL7YwFOeXw",
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