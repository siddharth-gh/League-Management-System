<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MatchesTableSeeder extends Seeder
{
    public function run()
    {
        $matches = [
            [
                'team1_id' => 8, // RR
                'team2_id' => 2, // MI
                'match_date' => Carbon::create(2025, 5, 1)->toDateString(),
                'match_time' => '19:30:00',
                'venue' => 'Sawai Mansingh Stadium',
            ],
            [
                'team1_id' => 3, // GT
                'team2_id' => 9, // SRH
                'match_date' => Carbon::create(2025, 5, 2)->toDateString(),
                'match_time' => '19:30:00',
                'venue' => 'Narendra Modi Stadium',
            ],
            [
                'team1_id' => 1, // RCB
                'team2_id' => 10, // CSK
                'match_date' => Carbon::create(2025, 5, 3)->toDateString(),
                'match_time' => '19:30:00',
                'venue' => 'M. Chinnaswamy Stadium',
            ],
            [
                'team1_id' => 5, // PBKS
                'team2_id' => 6, // LSG
                'match_date' => Carbon::create(2025, 5, 4)->toDateString(),
                'match_time' => '19:30:00',
                'venue' => 'IS Bindra Stadium',
            ],
            [
                'team1_id' => 9, // SRH
                'team2_id' => 4, // DC
                'match_date' => Carbon::create(2025, 5, 5)->toDateString(),
                'match_time' => '19:30:00',
                'venue' => 'Rajiv Gandhi Intl Stadium',
            ],
            [
                'team1_id' => 2, // MI
                'team2_id' => 3, // GT
                'match_date' => Carbon::create(2025, 5, 6)->toDateString(),
                'match_time' => '19:30:00',
                'venue' => 'Wankhede Stadium',
            ],
            [
                'team1_id' => 7, // KKR
                'team2_id' => 10, // CSK
                'match_date' => Carbon::create(2025, 5, 7)->toDateString(),
                'match_time' => '19:30:00',
                'venue' => 'Eden Gardens',
            ],
            [
                'team1_id' => 5, // PBKS
                'team2_id' => 4, // DC
                'match_date' => Carbon::create(2025, 5, 8)->toDateString(),
                'match_time' => '19:30:00',
                'venue' => 'IS Bindra Stadium',
            ],
            [
                'team1_id' => 6, // LSG
                'team2_id' => 1, // RCB
                'match_date' => Carbon::create(2025, 5, 9)->toDateString(),
                'match_time' => '19:30:00',
                'venue' => 'Ekana Cricket Stadium',
            ],
            [
                'team1_id' => 7, // KKR
                'team2_id' => 8, // RR
                'match_date' => Carbon::create(2025, 5, 4)->toDateString(),
                'match_time' => '15:30:00',
                'venue' => 'Eden Gardens',
            ],
        ];

        DB::table('matches')->insert($matches);
    }
}
