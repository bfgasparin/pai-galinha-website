<?php

use Illuminate\Database\Seeder;

class PhraseTableSeeder extends Seeder
{
    /**
     * Run the Phrase table seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Phrase::class, 3)->create();
    }
}
