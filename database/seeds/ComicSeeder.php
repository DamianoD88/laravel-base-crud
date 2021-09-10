<?php

use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($a = 0; $a < 10; $a++){

            $comic = new Comic();

            // campo di incremento automatico stesso non deve essere specificato.
            // $comic->id = 1;
            $comic->tipologia = "fantasy";
            $comic->shop = "online";
            $comic->characters = "Marvel";
            $comic->tv = "k2";
            $comic->videos = "10 episodi";

            $comic->save();


        }

        
        
    }
}
