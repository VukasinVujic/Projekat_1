<?php

use Illuminate\Database\Seeder;
use App\Todo;
class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Todo',7)->create();
    }
}
