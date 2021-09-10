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
        $comic = new Comic();

        $comic->id = 1;
        $comic->tipologia = "fantasy";
        $comic->shop = "online";
        $comic->characters = "Marvel";
        $comic->tv = "k2";
        $comic->videos = "10 episodi";

        $comic->save();
        
    }
}
