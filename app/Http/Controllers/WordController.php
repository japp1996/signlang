<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Word;

class WordController extends Controller
{
    public function get_all()
    {
        $words = Word::with(['video', 'word_category'])->paginate(3);
        $words->each(function($word) {
            return $word->videoID = str_replace("https://www.youtube.com/", "", $word->video->url);
        });
        return $words;
    }

    public function get_empty()
    {
        return $this->get_all();
    }

    public function get_one(Request $request)
    {
        $word = Word::where('name', $request->name)->with(['video', 'word_category']);

        if ($word->count() == 0) {
            $word = Word::where('name', 'LIKE', '%'.$request->name.'%')->with(['video', 'word_category']);
            return $word->count() == 0 ? $word->paginate(3) : $word->paginate(0);
        }
        return $word->paginate(1);
    }
}