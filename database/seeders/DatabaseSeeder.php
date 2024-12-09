<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // ClassicStudyContent::class,
            // ClassicStudyQuizzes::class,
            // POSHunterSentences::class,
            // SentenceBuilderSentences::class,
            MissionSeeder::class,
            // Add other seeders as needed
        ]);

        // $users = [
        //     ['first_name' => 'Anibal', 'last_name' => 'Hilpert', 'email' => 'maggio.quinten@example.org', 'birthday' => '1995-02-13', 'gender' => 'male', 'password' => 'Asd123123123', 'SB_total' => 1500, 'POSH_total' => 1400],
        //     ['first_name' => 'Jared', 'last_name' => 'Schoen V', 'email' => 'ibuckridge@example.com', 'birthday' => '1988-07-22', 'gender' => 'male', 'password' => 'Asd123123123', 'SB_total' => 1200, 'POSH_total' => 1300],
        //     ['first_name' => 'Kayla', 'last_name' => 'Mills', 'email' => 'skreiger@example.org', 'birthday' => '1992-12-30', 'gender' => 'female', 'password' => 'Asd123123123', 'SB_total' => 1600, 'POSH_total' => 1500],
        //     ['first_name' => 'Dustin', 'last_name' => 'King', 'email' => 'jermey.adams@example.org', 'birthday' => '1987-05-18', 'gender' => 'male', 'password' => 'Asd123123123', 'SB_total' => 1350, 'POSH_total' => 1450],
        //     ['first_name' => 'Jasmine', 'last_name' => 'Adams', 'email' => 'ana.orellana@example.com', 'birthday' => '1993-09-04', 'gender' => 'female', 'password' => 'Asd123123123', 'SB_total' => 1400, 'POSH_total' => 1350],
        //     ['first_name' => 'Benjamin', 'last_name' => 'Roberts', 'email' => 'elvis1@example.org', 'birthday' => '1990-11-14', 'gender' => 'male', 'password' => 'Asd123123123', 'SB_total' => 1300, 'POSH_total' => 1250],
        //     ['first_name' => 'Ava', 'last_name' => 'Jordan', 'email' => 'gene.owen@example.com', 'birthday' => '1996-01-28', 'gender' => 'female', 'password' => 'Asd123123123', 'SB_total' => 1500, 'POSH_total' => 1600],
        //     ['first_name' => 'Zane', 'last_name' => 'Webster', 'email' => 'jeffery.jenkins@example.net', 'birthday' => '1989-03-15', 'gender' => 'male', 'password' => 'Asd123123123', 'SB_total' => 1400, 'POSH_total' => 1450],
        //     ['first_name' => 'Sophie', 'last_name' => 'Mason', 'email' => 'terry.miller@example.org', 'birthday' => '1997-02-19', 'gender' => 'female', 'password' => 'Asd123123123', 'SB_total' => 1600, 'POSH_total' => 1550],
        //     ['first_name' => 'Oliver', 'last_name' => 'Knight', 'email' => 'ramiro.taylor@example.com', 'birthday' => '1994-06-23', 'gender' => 'male', 'password' => 'Asd123123123', 'SB_total' => 1500, 'POSH_total' => 1600],
        //     ['first_name' => 'Chloe', 'last_name' => 'Cooper', 'email' => 'dillard.samuel@example.org', 'birthday' => '1992-12-06', 'gender' => 'female', 'password' => 'Asd123123123', 'SB_total' => 1300, 'POSH_total' => 1200],
        //     ['first_name' => 'Emma', 'last_name' => 'Morris', 'email' => 'eileen.lang@example.net', 'birthday' => '1993-11-29', 'gender' => 'female', 'password' => 'Asd123123123', 'SB_total' => 1400, 'POSH_total' => 1350],
        //     ['first_name' => 'Lucas', 'last_name' => 'Nelson', 'email' => 'barton.griffith@example.org', 'birthday' => '1995-04-11', 'gender' => 'male', 'password' => 'Asd123123123', 'SB_total' => 1250, 'POSH_total' => 1300],
        //     ['first_name' => 'Emily', 'last_name' => 'Perez', 'email' => 'colleen.dixon@example.com', 'birthday' => '1996-08-30', 'gender' => 'female', 'password' => 'Asd123123123', 'SB_total' => 1400, 'POSH_total' => 1450],
        //     ['first_name' => 'Ethan', 'last_name' => 'Russell', 'email' => 'kristine.smith@example.net', 'birthday' => '1991-07-14', 'gender' => 'male', 'password' => 'Asd123123123', 'SB_total' => 1150, 'POSH_total' => 1250],
        //     ['first_name' => 'Charlotte', 'last_name' => 'Scott', 'email' => 'stephen.morrow@example.com', 'birthday' => '1990-04-22', 'gender' => 'female', 'password' => 'Asd123123123', 'SB_total' => 1500, 'POSH_total' => 1550],
        //     ['first_name' => 'Nathan', 'last_name' => 'Davis', 'email' => 'vernon.yates@example.com', 'birthday' => '1985-05-30', 'gender' => 'male', 'password' => 'Asd123123123', 'SB_total' => 1400, 'POSH_total' => 1300],
        //     ['first_name' => 'Olivia', 'last_name' => 'Hughes', 'email' => 'geraldo.anderson@example.org', 'birthday' => '1994-10-16', 'gender' => 'female', 'password' => 'Asd123123123', 'SB_total' => 1450, 'POSH_total' => 1500],
        //     ['first_name' => 'Aidan', 'last_name' => 'King', 'email' => 'ricardo.green@example.org', 'birthday' => '1997-01-09', 'gender' => 'male', 'password' => 'Asd123123123', 'SB_total' => 1250, 'POSH_total' => 1200],
        //     ['first_name' => 'Mia', 'last_name' => 'Wright', 'email' => 'leila.barnes@example.org', 'birthday' => '1998-03-25', 'gender' => 'female', 'password' => 'Asd123123123', 'SB_total' => 1500, 'POSH_total' => 1550]
        // ];

        // foreach ($users as $user) {
        //     User::create($user);
        // }
    }

}
