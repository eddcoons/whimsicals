<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //        Eloquent::unguard();


        $this->call(ProductsTableSeeder::class);
        $this->call(ImagesTablesSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(EventsTableSeeder::class);
    }
}
