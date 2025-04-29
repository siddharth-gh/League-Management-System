<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Standing;

class StandingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $standings = [
            ['team_id' => 1,  'played' => 10, 'won' => 7, 'lost' => 3, 'points' => 14], // RCB
            ['team_id' => 2,  'played' => 10, 'won' => 6, 'lost' => 4, 'points' => 12], // MI
            ['team_id' => 3,  'played' => 9,  'won' => 6, 'lost' => 3, 'points' => 12], // GT
            ['team_id' => 4,  'played' => 10, 'won' => 6, 'lost' => 4, 'points' => 12], // DC
            ['team_id' => 5,  'played' => 9,  'won' => 5, 'lost' => 3, 'points' => 11], // PBKS
            ['team_id' => 6,  'played' => 10, 'won' => 5, 'lost' => 5, 'points' => 10], // LSG
            ['team_id' => 7,  'played' => 10, 'won' => 4, 'lost' => 5, 'points' => 9],  // KKR
            ['team_id' => 8,  'played' => 10, 'won' => 3, 'lost' => 7, 'points' => 6],  // RR
            ['team_id' => 9,  'played' => 9,  'won' => 3, 'lost' => 6, 'points' => 6],  // SRH
            ['team_id' => 10, 'played' => 9,  'won' => 2, 'lost' => 7, 'points' => 4],  // CSK
        ];

        foreach ($standings as $data) {
            Standing::create($data);
        }
    }
}
