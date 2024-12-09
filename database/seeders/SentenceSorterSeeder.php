<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SentenceSorterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $sentences = [
            // Difficulty Level 1
            ['sentence' => 'The sun rises in the east.', 'type' => 'declarative', 'difficulty' => 1],
            ['sentence' => 'What is your name?', 'type' => 'interrogative', 'difficulty' => 1],
            ['sentence' => 'Please close the door.', 'type' => 'imperative', 'difficulty' => 1],
            ['sentence' => 'Wow! That’s amazing!', 'type' => 'exclamatory', 'difficulty' => 1],
            ['sentence' => 'She loves to read books.', 'type' => 'declarative', 'difficulty' => 1],
            ['sentence' => 'How are you today?', 'type' => 'interrogative', 'difficulty' => 1],
            ['sentence' => 'Turn off the lights.', 'type' => 'imperative', 'difficulty' => 1],
            ['sentence' => 'Oh no! I forgot my keys!', 'type' => 'exclamatory', 'difficulty' => 1],
            ['sentence' => 'He is writing a letter.', 'type' => 'declarative', 'difficulty' => 1],
            ['sentence' => 'Can you help me?', 'type' => 'interrogative', 'difficulty' => 1],

            // Difficulty Level 2
            ['sentence' => 'The river flows through the valley.', 'type' => 'declarative', 'difficulty' => 2],
            ['sentence' => 'Why did you leave early?', 'type' => 'interrogative', 'difficulty' => 2],
            ['sentence' => 'Bring me the newspaper.', 'type' => 'imperative', 'difficulty' => 2],
            ['sentence' => 'Hooray! We won the game!', 'type' => 'exclamatory', 'difficulty' => 2],
            ['sentence' => 'She painted a beautiful picture.', 'type' => 'declarative', 'difficulty' => 2],
            ['sentence' => 'What are your plans for tomorrow?', 'type' => 'interrogative', 'difficulty' => 2],
            ['sentence' => 'Please finish your homework.', 'type' => 'imperative', 'difficulty' => 2],
            ['sentence' => 'Yikes! That’s a big spider!', 'type' => 'exclamatory', 'difficulty' => 2],
            ['sentence' => 'They are preparing for the trip.', 'type' => 'declarative', 'difficulty' => 2],
            ['sentence' => 'When will you arrive?', 'type' => 'interrogative', 'difficulty' => 2],

            // Difficulty Level 3
            ['sentence' => 'The majestic mountains stood tall in the distance.', 'type' => 'declarative', 'difficulty' => 3],
            ['sentence' => 'Who is the author of this book?', 'type' => 'interrogative', 'difficulty' => 3],
            ['sentence' => 'Hand me the blueprints immediately.', 'type' => 'imperative', 'difficulty' => 3],
            ['sentence' => 'Wow! What an incredible performance!', 'type' => 'exclamatory', 'difficulty' => 3],
            ['sentence' => 'The scientist presented groundbreaking research.', 'type' => 'declarative', 'difficulty' => 3],
            ['sentence' => 'Why did the experiment fail?', 'type' => 'interrogative', 'difficulty' => 3],
            ['sentence' => 'Submit your report before noon.', 'type' => 'imperative', 'difficulty' => 3],
            ['sentence' => 'Oh my goodness! That’s unbelievable!', 'type' => 'exclamatory', 'difficulty' => 3],
            ['sentence' => 'The orchestra played a mesmerizing symphony.', 'type' => 'declarative', 'difficulty' => 3],
            ['sentence' => 'How does this machine work?', 'type' => 'interrogative', 'difficulty' => 3],
        ];

        // Insert sentences into the database
        DB::table('sentence_sorter_sentences')->insert($sentences);
    }
}