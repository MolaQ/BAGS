<?php

namespace Database\Seeders;

use App\Models\Stage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team = Stage::create([
            'category'=>'moodle.png',
            'title' => 'Test na platformie moodle',
            'description' =>'40 pytań w 25 minut',
            'maxpoints' => 10,
            'stagestate' => 'Zakończone'
        ]);
        $team = Stage::create([
            'category'=>'kahoot.png',
            'title' => 'Quiz na platformie Kahoot! cz.I',
            'description' =>'Interaktywny Quiz na zdalnej platformie. Pytania interdyscyplinarne w których oprócz poprawnej odpowiedzi, liczy się również czas jej udzielenia.',
            'maxpoints' => 10, 'stagestate' => 'W trakcie'
        ]);
        $team = Stage::create([
            'category'=>'mysql.png',
            'title' => 'Zadanie z baz danych',
            'description' =>'Zadanie polega na napisaniu 2 zapytań w języku SQL Do wykorzystania: phpMyAdmin. Plik do zaimportowania baza.txt znajduje się na pulpicie.  Czas wykonania zadania: 10 minut.',
            'maxpoints' => 15,
            'stagestate' => 'Oczekujące'
        ]);
        $team = Stage::create([
            'category'=>'kahoot.png',
            'title' => 'Quiz na platformie Kahoot! cz.II',
            'description' =>'Interaktywny Quiz na zdalnej platformie. Pytania interdyscyplinarne w których oprócz poprawnej odpowiedzi, liczy się również czas jej udzielenia.',
            'maxpoints' => 10,
            'stagestate' => 'Oczekujące'
        ]);
        $team = Stage::create([
            'category'=>'inkscape.png',
            'title' => 'Zadanie z grafiki komputerowej',
            'description' => 'Korzystając z narzędzia do tworzenia grafiki wektorowej postaraj się możliwie wiernie odwzorować papugę z obrazka. Czas wykonania zadania: 10 minut.',
            'maxpoints' => 15,
            'stagestate' => 'Oczekujące'
        ]);
        $team = Stage::create([
            'category'=>'kahoot.png',
            'title' => 'Quiz na platformie Kahoot! cz.III',
            'description' =>'Interaktywny Quiz na zdalnej platformie. Pytania interdyscyplinarne w których oprócz poprawnej odpowiedzi, liczy się również czas jej udzielenia.',
            'maxpoints' => 10,
            'stagestate' => 'Oczekujące'
        ]);
        $team = Stage::create([
            'category'=>'php.png',
            'title' => 'Zadanie PHP CSS',
            'description' =>'Zadanie polegające na stworzeniu forularza realizującego określone zadanie z wykorzystaniem języka PHP i CSS. Czas wykonania zadania zadania: 15 minut.',
            'maxpoints' => 15,
            'stagestate' => 'Oczekujące'
        ]);
    }
}
