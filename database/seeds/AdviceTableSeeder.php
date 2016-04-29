<?php

use Illuminate\Database\Seeder;

class AdviceTableSeeder extends Seeder
{
    /**
     * Run the Phrase table seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Advice::class, 3)->create();
    }
}
