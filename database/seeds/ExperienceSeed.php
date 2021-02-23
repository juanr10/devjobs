<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experiences')->insert([
            'name' => '0 - 6 Months',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('experiences')->insert([
            'name' => '6 Months - 1 Year',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('experiences')->insert([
            'name' => '1 - 3 Years',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('experiences')->insert([
            'name' => '3 - 5 Years',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('experiences')->insert([
            'name' => '5 - 7 Years',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('experiences')->insert([
            'name' => '7 - 10 Years',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('experiences')->insert([
            'name' => '10 - 12 Years',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('experiences')->insert([
            'name' => '12 - 15 Years',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
