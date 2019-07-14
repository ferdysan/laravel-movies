<?php

use Illuminate\Database\Seeder;
use App\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies =[
          [
            'title'=> 'Il padrino',
            'release'=> '1972'
          ],
          [
            'title'=>'Gravity',
            'release'=>'2013'
          ]
        ];

        foreach ($movies as $movie) {
          $nuovo_film = new Movie();
          $nuovo_film->fill($movie);
          $nuovo_film->save();
        }

    }
}
