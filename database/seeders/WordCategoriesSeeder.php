<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WordCategory;

class WordCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $word_categories = [
            "Abecedario",
            "Verbos",
            "Preguntas Comúnes",
            "Relaciones Personales | Palabras",
            "Relaciones Personales | Frases",
            "Salud | Palabras",
            "Salud | Frases",
        ];

        foreach ($word_categories as $wc) {
            $newWordCategory = new WordCategory;
            $newWordCategory->name = $wc;
            $newWordCategory->save();
        }
    }
}
