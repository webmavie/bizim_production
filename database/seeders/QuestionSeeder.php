<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                'question' => 'What is the capital of India?',
                'answer' => 'New Delhi',
            ],
        ];
        foreach ($questions as $question) {
            Question::create($question);
        }
    }
}
