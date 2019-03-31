<?php

use Illuminate\Database\Seeder;

class ResumeItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ResumeItem::class, 10)->create();
    }
}
