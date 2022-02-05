<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Word;

class WordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $words = [
            ["name" => "A", "video_id" => 1, "word_category_id" => 1, 10, 13],
            ["name" => "B", "video_id" => 1, "word_category_id" => 1, 13, 17],
            ["name" => "C", "video_id" => 1, "word_category_id" => 1, 17, 21],
            ["name" => "D", "video_id" => 1, "word_category_id" => 1, 21, 25],
            ["name" => "E", "video_id" => 1, "word_category_id" => 1, 25, 29],
            ["name" => "F", "video_id" => 1, "word_category_id" => 1, 29, 33],
            ["name" => "G", "video_id" => 1, "word_category_id" => 1, 33, 38],
            ["name" => "H", "video_id" => 1, "word_category_id" => 1, 38, 42],
            ["name" => "I", "video_id" => 1, "word_category_id" => 1, 42, 46],
            ["name" => "J", "video_id" => 1, "word_category_id" => 1, 46, 50],
            ["name" => "K", "video_id" => 1, "word_category_id" => 1, 50, 53],
            ["name" => "L", "video_id" => 1, "word_category_id" => 1, 53, 58],
            ["name" => "M", "video_id" => 1, "word_category_id" => 1, 58, 62],
            ["name" => "N", "video_id" => 1, "word_category_id" => 1, 62, 65],
            ["name" => "Ñ", "video_id" => 1, "word_category_id" => 1, 65, 69],
            ["name" => "O", "video_id" => 1, "word_category_id" => 1, 69, 73],
            ["name" => "P", "video_id" => 1, "word_category_id" => 1, 73, 76],
            ["name" => "Q", "video_id" => 1, "word_category_id" => 1, 76, 79],
            ["name" => "R", "video_id" => 1, "word_category_id" => 1, 79, 83],
            ["name" => "S", "video_id" => 1, "word_category_id" => 1, 83, 87],
            ["name" => "T", "video_id" => 1, "word_category_id" => 1, 87, 90],
            ["name" => "U", "video_id" => 1, "word_category_id" => 1, 90, 93],
            ["name" => "V", "video_id" => 1, "word_category_id" => 1, 93, 97],
            ["name" => "W", "video_id" => 1, "word_category_id" => 1, 97, 100],
            ["name" => "X", "video_id" => 1, "word_category_id" => 1, 100, 103],
            ["name" => "Y", "video_id" => 1, "word_category_id" => 1, 103, 106],
            ["name" => "Z", "video_id" => 1, "word_category_id" => 1, 106, 110],

            ["name" => "Abrir", "video_id" => 1, "word_category_id" => 2, 110, 113],
            ["name" => "Agarrar", "video_id" => 1, "word_category_id" => 2, 113, 116],
            ["name" => "Amar", "video_id" => 1, "word_category_id" => 2, 116, 119],
            ["name" => "Ayudar", "video_id" => 1, "word_category_id" => 2, 119, 122],
            ["name" => "Beber", "video_id" => 1, "word_category_id" => 2, 122, 126],
            ["name" => "Cerrar", "video_id" => 1, "word_category_id" => 2, 126, 130],
            ["name" => "Conocer", "video_id" => 1, "word_category_id" => 2, 130, 133],
            ["name" => "Comer", "video_id" => 1, "word_category_id" => 2, 133, 136],
            ["name" => "Comunicar", "video_id" => 1, "word_category_id" => 2, 136, 140],
            ["name" => "Comprar", "video_id" => 1, "word_category_id" => 2, 140, 144],
            ["name" => "Correr", "video_id" => 1, "word_category_id" => 2, 144, 148],
            ["name" => "Cortar", "video_id" => 1, "word_category_id" => 2, 148, 151],
            ["name" => "Dar", "video_id" => 1, "word_category_id" => 2, 151, 155],
            ["name" => "Dibujar", "video_id" => 1, "word_category_id" => 2, 155, 160],
            ["name" => "Dormir", "video_id" => 1, "word_category_id" => 2, 160, 163],
            ["name" => "Escribir", "video_id" => 1, "word_category_id" => 2, 163, 168],
            ["name" => "Escoger", "video_id" => 1, "word_category_id" => 2, 168, 171],
            ["name" => "Enviar", "video_id" => 1, "word_category_id" => 2, 171, 175],
            ["name" => "Fastidiar", "video_id" => 1, "word_category_id" => 2, 175, 178],
            ["name" => "Gastar", "video_id" => 1, "word_category_id" => 2, 178, 183],
            ["name" => "Hablar", "video_id" => 1, "word_category_id" => 2, 183, 189],
            ["name" => "Ir", "video_id" => 1, "word_category_id" => 2, 189, 194],
            ["name" => "Jurar", "video_id" => 1, "word_category_id" => 2, 194, 197],
            ["name" => "Recordar", "video_id" => 1, "word_category_id" => 2, 197, 202],
            ["name" => "Reir", "video_id" => 1, "word_category_id" => 2, 202, 206],
            ["name" => "Regalar", "video_id" => 1, "word_category_id" => 2, 206, 210],
            ["name" => "Respetar", "video_id" => 1, "word_category_id" => 2, 210, 215],
            ["name" => "Llorar", "video_id" => 1, "word_category_id" => 2, 125, 220],
            ["name" => "Mandar", "video_id" => 1, "word_category_id" => 2, 220, 224],
            ["name" => "Manejar", "video_id" => 1, "word_category_id" => 2, 224, 230],
            ["name" => "Mentir", "video_id" => 1, "word_category_id" => 2, 230, 234],
            ["name" => "Nadar", "video_id" => 1, "word_category_id" => 2, 234, 239],
            ["name" => "Oir", "video_id" => 1, "word_category_id" => 2, 239, 244],
            ["name" => "Olvidar", "video_id" => 1, "word_category_id" => 2, 244, 249],
            ["name" => "Perdonar", "video_id" => 1, "word_category_id" => 2, 249, 252],
            ["name" => "Pedir", "video_id" => 1, "word_category_id" => 2, 252, 257],
            ["name" => "Pensar", "video_id" => 1, "word_category_id" => 2, 257, 261],
            ["name" => "Permitir", "video_id" => 1, "word_category_id" => 2, 261, 265],
            ["name" => "Querer", "video_id" => 1, "word_category_id" => 2, 265, 270],
            ["name" => "Recibir", "video_id" => 1, "word_category_id" => 2, 270, 274],
            ["name" => "Saber", "video_id" => 1, "word_category_id" => 2, 274, 278],
            ["name" => "Sentir", "video_id" => 1, "word_category_id" => 2, 278, 282],
            ["name" => "Soñar", "video_id" => 1, "word_category_id" => 2, 282, 287],
            ["name" => "Trabajar", "video_id" => 1, "word_category_id" => 2, 287, 291],
            ["name" => "Tocar", "video_id" => 1, "word_category_id" => 2, 291, 295],
            ["name" => "Tipear", "video_id" => 1, "word_category_id" => 2, 295, 300],
            ["name" => "Vender", "video_id" => 1, "word_category_id" => 2, 300, 304],
            ["name" => "Venir", "video_id" => 1, "word_category_id" => 2, 304, 308],

            ["name" => "¿Cómo?", "video_id" => 1, "word_category_id" => 3, 308, 311, 2],
            ["name" => "¿Cuándo?", "video_id" => 1, "word_category_id" => 3, 311, 315, 2],
            ["name" => "¿Dónde?", "video_id" => 1, "word_category_id" => 3, 315, 318, 2],
            ["name" => "¿Qué?", "video_id" => 1, "word_category_id" => 3, 318, 321, 2],
            ["name" => "¿Quién?", "video_id" => 1, "word_category_id" => 3, 321, 325, 2],

            // tomo 2
            ["name" => "Abuelo", "video_id" => 2, "word_category_id" => 4, 10, 14],
            ["name" => "Amigo", "video_id" => 2, "word_category_id" => 4, 14, 18],
            ["name" => "Colega", "video_id" => 2, "word_category_id" => 4, 18, 23],
            ["name" => "Conocido", "video_id" => 2, "word_category_id" => 4, 23, 25],
            ["name" => "Cuñado", "video_id" => 2, "word_category_id" => 4, 25, 30],
            ["name" => "Esposo", "video_id" => 2, "word_category_id" => 4, 30, 34],
            ["name" => "Ex (como prefijo)", "video_id" => 2, "word_category_id" => 4, 34, 38],
            ["name" => "Gemelo", "video_id" => 2, "word_category_id" => 4, 38, 43],
            ["name" => "Hermano", "video_id" => 2, "word_category_id" => 4, 43, 47],
            ["name" => "Jefe", "video_id" => 2, "word_category_id" => 4, 47, 51],
            ["name" => "Hijo", "video_id" => 2, "word_category_id" => 4, 51, 55],
            ["name" => "Madre", "video_id" => 2, "word_category_id" => 4, 55, 58],
            ["name" => "Nieta", "video_id" => 2, "word_category_id" => 4, 58, 65],
            ["name" => "Nieto", "video_id" => 2, "word_category_id" => 4, 65, 70],
            ["name" => "Novio", "video_id" => 2, "word_category_id" => 4, 70, 74],
            ["name" => "Padre", "video_id" => 2, "word_category_id" => 4, 74, 79],
            ["name" => "Padres", "video_id" => 2, "word_category_id" => 4, 79, 83],
            ["name" => "Primo", "video_id" => 2, "word_category_id" => 4, 83, 88],
            ["name" => "Prometido", "video_id" => 2, "word_category_id" => 4, 88, 91],
            ["name" => "Pana", "video_id" => 2, "word_category_id" => 4, 91, 95],
            ["name" => "Sobrino", "video_id" => 2, "word_category_id" => 4, 95, 98],
            ["name" => "Suegro", "video_id" => 2, "word_category_id" => 4, 98, 102],
            ["name" => "Tio", "video_id" => 2, "word_category_id" => 4, 102, 106],
            ["name" => "Vecino", "video_id" => 2, "word_category_id" => 4, 106, 111],

            ["name" => "Adios", "video_id" => 2, "word_category_id" => 5, 111, 115],
            ["name" => "Buenos Días", "video_id" => 2, "word_category_id" => 5, 115, 119],
            ["name" => "Buenas Tardes", "video_id" => 2, "word_category_id" => 5, 119, 124],
            ["name" => "Buenas Noches", "video_id" => 2, "word_category_id" => 5, 124, 129],
            ["name" => "¿En qué trabajas?", "video_id" => 2, "word_category_id" => 5, 129, 135],
            ["name" => "¿En qué estudias?", "video_id" => 2, "word_category_id" => 5, 135, 141],
            ["name" => "¿Cómo te llamas?", "video_id" => 2, "word_category_id" => 5, 141, 145],
            ["name" => "¿Lo conoces?", "video_id" => 2, "word_category_id" => 5, 145, 149],
            ["name" => "Yo lo conozco", "video_id" => 2, "word_category_id" => 5, 149, 154],
            ["name" => "Quiero conocerlo", "video_id" => 2, "word_category_id" => 5, 154, 158],
            ["name" => "Hola", "video_id" => 2, "word_category_id" => 5, 158, 161],
            ["name" => "Te amo", "video_id" => 2, "word_category_id" => 5, 161, 165],
            ["name" => "Te quiero", "video_id" => 2, "word_category_id" => 5, 165, 168],
            ["name" => "Estoy molesto contigo", "video_id" => 2, "word_category_id" => 5, 168, 173],
            ["name" => "Estoy de acuerdo", "video_id" => 2, "word_category_id" => 5, 173, 176],
            ["name" => "Estoy en desacuerdo", "video_id" => 2, "word_category_id" => 5, 176, 181],
        ];


        foreach ($words as $word) {
            $newWord = new Word;
            $newWord->name = $word["name"];
            $newWord->video_id = $word["video_id"];
            $newWord->word_category_id = $word["word_category_id"];
            $newWord->start = $word[0];
            $newWord->end = $word[1];
            $newWord->save();
        }
    }
}
