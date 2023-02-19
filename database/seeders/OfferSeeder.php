<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\Offer;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Offer::factory(10)->create([
            'firstname' => 'Hans',
            'lastname' => 'Dans',
            'email' => 'h.d@gmail.com',
            'phone_number' => '067848227',
            'street' => 'Meidooenstraat',
            'house_number' => '6',
            'street_addition' => 'C',
            'city' => 'Amsterdam',
            'zip_code' => '1783HJ',
            'task_description' => 'lorem ipsum'
    ]);
    }
}
