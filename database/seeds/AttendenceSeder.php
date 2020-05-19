<?php

use Illuminate\Database\Seeder;
use App\Attendence;

class AttendenceSeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Attendence::class,10)->create();
    }
}
