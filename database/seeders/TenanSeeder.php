<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tenan;
class TenanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tenan::create([
            'KodeTenan' => 'TK22151105101',
            'NamaTenan' => 'Fikri maret',
            'HP' => '08221511051735',
        ]);

        Tenan::create([
            'KodeTenan' => 'TK22151105102',
            'NamaTenan' => 'Fikri Maret',
            'HP' => '08221511051745',
        ]);
    }
}
