<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Offer;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            OfferSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();
        /*Offer::factory(10)->create([
            'firstname' => 'Tobias',
            'lastname' => 'Maipauw',
            'email' => 't.p.maipauw@gmail.com',
            'zip_code' => '1783 GV',
            'address' => 'Sparrenstraat',
            'task_description' => 'Lorem ipsum']);*/

        User::factory(1)->create([
            'name' => 'admin',
        ]);
    }
}
