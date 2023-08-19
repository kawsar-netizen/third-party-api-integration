<?php

namespace App\Http\Controllers;

use App\Models\question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuestionController extends Controller
{
    public function fetchInsert()
    {
        $respones = Http::get('https://quizapi.io/api/v1/questions', [
            'apiKey' => 'siwZgrLsbKUkx4ApHCa7CX0fwEiSqorACCafuTAl',
            'limit' => 10
        ]);
        $questions = json_decode($respones->body());
        foreach ($questions as $q) {
            $question = new question();
            $question->question = $q->question;
            $question->answer_a = $q->answers->answer_a;
            $question->answer_b = $q->answers->answer_b;
            $question->answer_c = $q->answers->answer_c;
            $question->save();
        }
        return "Data Fetched from external api and saved into database";
    }

    public function show()
    {
        $data['questions'] = question::all();
        return view('welcome', $data);
    }
}
