<?php

namespace Database\Seeders;

use App\Models\Result;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResultsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team = Result::create(['stage_id'=>1, 'team_id' => 1, 'points' =>582]);
        $team = Result::create(['stage_id'=>1, 'team_id' => 2, 'points' =>406]);
        $team = Result::create(['stage_id'=>1, 'team_id' => 3, 'points' =>737]);
        $team = Result::create(['stage_id'=>1, 'team_id' => 4, 'points' =>403]);
        $team = Result::create(['stage_id'=>1, 'team_id' => 5, 'points' =>571]);
        $team = Result::create(['stage_id'=>1, 'team_id' => 6, 'points' =>655]);
        $team = Result::create(['stage_id'=>1, 'team_id' => 7, 'points' =>581]);
        $team = Result::create(['stage_id'=>1, 'team_id' => 8, 'points' =>559]);
        $team = Result::create(['stage_id'=>1, 'team_id' => 9, 'points' =>616]);
        $team = Result::create(['stage_id'=>1, 'team_id' => 10, 'points' =>485]);

        for ($i=2; $i<=7; $i++)
        {
            $team = Result::create(['stage_id'=>$i, 'team_id' => 1, 'points' =>0]);
            $team = Result::create(['stage_id'=>$i, 'team_id' => 2, 'points' =>0]);
            $team = Result::create(['stage_id'=>$i, 'team_id' => 3, 'points' =>0]);
            $team = Result::create(['stage_id'=>$i, 'team_id' => 4, 'points' =>0]);
            $team = Result::create(['stage_id'=>$i, 'team_id' => 5, 'points' =>0]);
            $team = Result::create(['stage_id'=>$i, 'team_id' => 6, 'points' =>0]);
            $team = Result::create(['stage_id'=>$i, 'team_id' => 7, 'points' =>0]);
            $team = Result::create(['stage_id'=>$i, 'team_id' => 8, 'points' =>0]);
            $team = Result::create(['stage_id'=>$i, 'team_id' => 9, 'points' =>0]);
            $team = Result::create(['stage_id'=>$i, 'team_id' => 10, 'points' =>0]);
        };
    }
}
