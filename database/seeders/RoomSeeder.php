<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RoomSeeder extends Seeder
{
    public function run()
    {
        $rooms = [
            [
                'creator_id' => 1,
                'room_name' => 'Tense Mastery Room',
                'room_description' => 'A room dedicated to mastering verb tenses and their correct usage.',
                'passcode' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'creator_id' => 1,
                'room_name' => 'Punctuation Perfection Room',
                'room_description' => 'A room for perfecting the use of commas, periods, and other punctuation marks.',
                'passcode' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'creator_id' => 1,
                'room_name' => 'Parts of Speech Zone',
                'room_description' => 'A room to enhance understanding of nouns, verbs, adjectives, and other parts of speech.',
                'passcode' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'creator_id' => 1,
                'room_name' => 'Sentence Structuring Hub',
                'room_description' => 'A room focused on building well-formed and grammatically correct sentences.',
                'passcode' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'creator_id' => 1,
                'room_name' => 'Grammar Rules Arena',
                'room_description' => 'A room to challenge your knowledge of grammar rules and exceptions.',
                'passcode' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('rooms')->insert($rooms);
    }

}
