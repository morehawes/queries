<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Query;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Query::create([
            'title' => 'Cafe',
            'type' => 'Food',
            'query' => 'cafe',
            'icon' => 'ion-coffee',
            'colour' => 'brown'
        ]);

        Query::create([
            'title' => 'Hardware',
            'type' => 'Shop',
            'query' => 'hardware',
            'icon' => 'ion-wrench',
            'colour' => 'grey'
        ]);


        Query::create([
            'title' => 'Hotel',
            'type' => 'Accomodation',
            'query' => 'hotel',
            'icon' => 'ion-home',
            'colour' => 'green'
        ]);

    }
}
