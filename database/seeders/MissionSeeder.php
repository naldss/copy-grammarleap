<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mission;

class MissionSeeder extends Seeder
{
    public function run()
    {
        $missions = [
            // [
            //     'title' => 'Complete a Classic Study Quiz',
            //     'description' => 'Earn +15 points on game levels by completing a Classic Study Quiz.',
            //     'points' => 15,
            // ],
            // [
            //     'title' => 'POS Hunter 100% Score Challenge',
            //     'description' => 'Earn +20 points on POS Hunter level by scoring 100% on 1 of your games.',
            //     'points' => 20,
            // ],
            // [
            //     'title' => 'Sentence Builder 100% Score Challenge',
            //     'description' => 'Earn +20 points on Sentence Builder level by scoring 100% on 1 of your games.',
            //     'points' => 20,
            // ],
            // [
            //     'title' => 'Tense Challenge obtain 100% Score',
            //     'description' => 'Earn +20 points on Tense Challenge level by scoring 100% on 1 of your games.',
            //     'points' => 20,
            // ],
            [
                'title' => 'Obtain 100% Score in Sentence Sorter',
                'description' => 'Earn +20 points on Sentence Sorter level by scoring 100% on 1 of your games.',
                'points' => 20,
            ],
        ];

        foreach ($missions as $mission) {
            Mission::create($mission);
        }
    }
}
