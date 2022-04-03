<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team = Team::create(['teammembers' => 'Damian Ruszała | Jakub Błaszczyk', 'classname' =>'3k', 'group' => 1]);
        $team = Team::create(['teammembers' => 'Dawid Gorszka | Tymoteusz Kufel', 'classname' =>'3k', 'group' => 2]);
        $team = Team::create(['teammembers' => 'Maksymilian Żeleźniak | Marcin Kamiński', 'classname' =>'3r', 'group' => 1]);
        $team = Team::create(['teammembers' => 'Szymon Biront | Patryk Piórkowski', 'classname' =>'3r', 'group' => 2]);
        $team = Team::create(['teammembers' => 'Wojciech Romanowski | Dominik Szulc', 'classname' =>'4i', 'group' => 1]);
        $team = Team::create(['teammembers' => 'Dawid Mazurkiewicz | Tomasz Ptak', 'classname' =>'4i', 'group' => 2]);
        $team = Team::create(['teammembers' => 'Tomasz Tobolski | Mateusz Sikorski', 'classname' =>'4k', 'group' => 1]);
        $team = Team::create(['teammembers' => 'Tomasz Stuba | Piotr Martenka', 'classname' =>'4k', 'group' => 2]);
        $team = Team::create(['teammembers' => 'Błażej Jaworski | Seweryn Filipkowski', 'classname' =>'4r', 'group' => 1]);
        $team = Team::create(['teammembers' => 'Patryk Piszczek | Przemysław Piszczek', 'classname' =>'4r', 'group' => 2]);
    }

}
