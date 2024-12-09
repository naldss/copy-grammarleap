<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizOnRoomSeeder extends Seeder
{
    public function run()
    {
        $quizzes = [
            // [
            //     'room_id' => 17, // Room 1
            //     'question' => 'Which sentence is correctly punctuated?',
            //     'choice1' => 'I am going to the store, to buy some milk.',
            //     'choice2' => 'I am going to the store to buy some milk.',
            //     'choice3' => 'I am, going to the store to buy some milk.',
            //     'choice4' => 'I am going, to the store to buy some milk.',
            //     'answer' => 'I am going to the store to buy some milk.',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'room_id' => 17, // Room 1
            //     'question' => 'What is the correct plural of “child”?',
            //     'choice1' => 'Childs',
            //     'choice2' => 'Child',
            //     'choice3' => 'Children',
            //     'choice4' => 'Childrens',
            //     'answer' => 'Children',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'room_id' => 17, // Room 1
            //     'question' => 'Which word is a noun in the sentence: "The dog barked loudly."?',
            //     'choice1' => 'Dog',
            //     'choice2' => 'Barked',
            //     'choice3' => 'Loudly',
            //     'choice4' => 'The',
            //     'answer' => 'Dog',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'room_id' => 17, // Room 1
            //     'question' => 'Which sentence uses a conjunction?',
            //     'choice1' => 'She runs fast.',
            //     'choice2' => 'He is tall, and she is short.',
            //     'choice3' => 'The sky is blue.',
            //     'choice4' => 'I love reading.',
            //     'answer' => 'He is tall, and she is short.',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'room_id' => 17, // Room 1
            //     'question' => 'What type of sentence is this: "What a beautiful day it is!"?',
            //     'choice1' => 'Declarative',
            //     'choice2' => 'Interrogative',
            //     'choice3' => 'Exclamatory',
            //     'choice4' => 'Imperative',
            //     'answer' => 'Exclamatory',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'room_id' => 17, // Room 1
            //     'question' => 'Which sentence uses correct capitalization?',
            //     'choice1' => 'the quick brown fox jumps over the lazy dog.',
            //     'choice2' => 'The Quick Brown Fox Jumps Over The Lazy Dog.',
            //     'choice3' => 'The quick brown fox jumps over the lazy dog.',
            //     'choice4' => 'THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG.',
            //     'answer' => 'The quick brown fox jumps over the lazy dog.',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'room_id' => 17, // Room 1
            //     'question' => 'Identify the correct past tense of "run":',
            //     'choice1' => 'Run',
            //     'choice2' => 'Ran',
            //     'choice3' => 'Running',
            //     'choice4' => 'Runned',
            //     'answer' => 'Ran',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'room_id' => 17, // Room 1
            //     'question' => 'What is the adjective in this sentence: "The red apple is juicy."?',
            //     'choice1' => 'Red',
            //     'choice2' => 'Apple',
            //     'choice3' => 'Juicy',
            //     'choice4' => 'Is',
            //     'answer' => 'Red',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'room_id' => 17, // Room 1
            //     'question' => 'Which word is an adverb in this sentence: "She sings beautifully."?',
            //     'choice1' => 'She',
            //     'choice2' => 'Sings',
            //     'choice3' => 'Beautifully',
            //     'choice4' => 'None',
            //     'answer' => 'Beautifully',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'room_id' => 17, // Room 1
            //     'question' => 'Which sentence is written in future tense?',
            //     'choice1' => 'I walk to school.',
            //     'choice2' => 'I will walk to school.',
            //     'choice3' => 'I walked to school.',
            //     'choice4' => 'I am walking to school.',
            //     'answer' => 'I will walk to school.',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'room_id' => 18, // Room 2
            //     'question' => 'Which sentence uses the subjunctive mood correctly?',
            //     'choice1' => 'If I was rich, I would travel the world.',
            //     'choice2' => 'If I were rich, I would travel the world.',
            //     'choice3' => 'If I am rich, I would travel the world.',
            //     'choice4' => 'If I had been rich, I will travel the world.',
            //     'answer' => 'If I were rich, I would travel the world.',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'room_id' => 18, // Room 2
            //     'question' => 'Which sentence is in passive voice?',
            //     'choice1' => 'She baked a cake.',
            //     'choice2' => 'The cake was baked by her.',
            //     'choice3' => 'She is baking a cake.',
            //     'choice4' => 'She will bake a cake.',
            //     'answer' => 'The cake was baked by her.',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'room_id' => 18, // Room 2
            //     'question' => 'Which of the following uses correct parallel structure?',
            //     'choice1' => 'He likes swimming, biking, and to run.',
            //     'choice2' => 'He likes to swim, biking, and running.',
            //     'choice3' => 'He likes swimming, biking, and running.',
            //     'choice4' => 'He likes swimming, to bike, and running.',
            //     'answer' => 'He likes swimming, biking, and running.',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'room_id' => 18, // Room 2
            //     'question' => 'Which sentence uses an appositive phrase correctly?',
            //     'choice1' => 'My brother, a talented musician, plays the piano.',
            //     'choice2' => 'My brother a talented musician, plays the piano.',
            //     'choice3' => 'My brother, a talented musician plays the piano.',
            //     'choice4' => 'My brother a talented musician plays the piano.',
            //     'answer' => 'My brother, a talented musician, plays the piano.',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'room_id' => 18, // Room 2
            //     'question' => 'What is the gerund in this sentence: "Swimming is my favorite activity"?',
            //     'choice1' => 'Swimming',
            //     'choice2' => 'Is',
            //     'choice3' => 'Favorite',
            //     'choice4' => 'Activity',
            //     'answer' => 'Swimming',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'room_id' => 18, // Room 2
            //     'question' => 'Which sentence uses correct conditional verb forms?',
            //     'choice1' => 'If he studied harder, he would pass the test.',
            //     'choice2' => 'If he studies harder, he would pass the test.',
            //     'choice3' => 'If he study harder, he would pass the test.',
            //     'choice4' => 'If he studied harder, he will pass the test.',
            //     'answer' => 'If he studied harder, he would pass the test.',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'room_id' => 18, // Room 2
            //     'question' => 'Which word is a preposition?',
            //     'choice1' => 'Before',
            //     'choice2' => 'Quickly',
            //     'choice3' => 'Jump',
            //     'choice4' => 'Play',
            //     'answer' => 'Before',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'room_id' => 18, // Room 2
            //     'question' => 'What is the correct comparative form of "good"?',
            //     'choice1' => 'Gooder',
            //     'choice2' => 'Best',
            //     'choice3' => 'Better',
            //     'choice4' => 'More good',
            //     'answer' => 'Better',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'room_id' => 18, // Room 2
            //     'question' => 'Which sentence contains a dependent clause?',
            //     'choice1' => 'I went to the store.',
            //     'choice2' => 'Although it was raining, I went to the store.',
            //     'choice3' => 'It was raining.',
            //     'choice4' => 'I bought some milk.',
            //     'answer' => 'Although it was raining, I went to the store.',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'room_id' => 18, // Room 2
            //     'question' => 'Which sentence uses correct punctuation for a quotation?',
            //     'choice1' => '"Where are you going," she asked?',
            //     'choice2' => '"Where are you going?" she asked.',
            //     'choice3' => '"Where are you going?" She asked.',
            //     'choice4' => '"Where are you going", she asked?',
            //     'answer' => '"Where are you going?" she asked.',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            [
                'room_id' => 19, // Room 19
                'question' => 'What is the past tense of "write"?',
                'choice1' => 'Wrote',
                'choice2' => 'Written',
                'choice3' => 'Writes',
                'choice4' => 'Writing',
                'answer' => 'Wrote',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_id' => 19, // Room 19
                'question' => 'Which sentence is an example of a simile?',
                'choice1' => 'She is as brave as a lion.',
                'choice2' => 'He runs faster than the wind.',
                'choice3' => 'The stars danced in the night sky.',
                'choice4' => 'Time is a thief.',
                'answer' => 'She is as brave as a lion.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_id' => 19, // Room 19
                'question' => 'What is the synonym of "happy"?',
                'choice1' => 'Sad',
                'choice2' => 'Elated',
                'choice3' => 'Angry',
                'choice4' => 'Tired',
                'answer' => 'Elated',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_id' => 19, // Room 19
                'question' => 'What is the comparative form of "big"?',
                'choice1' => 'Biggest',
                'choice2' => 'Bigger',
                'choice3' => 'Large',
                'choice4' => 'Huge',
                'answer' => 'Bigger',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_id' => 19, // Room 19
                'question' => 'Which of the following is a proper noun?',
                'choice1' => 'city',
                'choice2' => 'country',
                'choice3' => 'New York',
                'choice4' => 'river',
                'answer' => 'New York',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ];

        DB::table('quiz_on_rooms')->insert($quizzes);
    }

}
