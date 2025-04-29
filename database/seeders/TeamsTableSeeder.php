<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $teams = [
            ['name' => 'Royal Challengers Bangalore', 'logo' => 'rcb.png'],
            ['name' => 'Mumbai Indians', 'logo' => 'mi.png'],
            ['name' => 'Gujarat Titans', 'logo' => 'gt.png'],
            ['name' => 'Delhi Capitals', 'logo' => 'dc.png'],
            ['name' => 'Punjab Kings', 'logo' => 'pbks.png'],
            ['name' => 'Lucknow Super Giants', 'logo' => 'lsg.png'],
            ['name' => 'Kolkata Knight Riders', 'logo' => 'kkr.png'],
            ['name' => 'Rajasthan Royals', 'logo' => 'rr.png'],
            ['name' => 'Sunrisers Hyderabad', 'logo' => 'srh.png'],
            ['name' => 'Chennai Super Kings', 'logo' => 'csk.png'],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
