<?php

use Illuminate\Database\Seeder;
use App\Semen;

class SemensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $semens = factory(Semen::class,10)->create();
    }
}
