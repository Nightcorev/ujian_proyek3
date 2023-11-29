<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kasir;

class KasirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate some sample data for the "kasir" table
        Kasir::create([
            'KodeKasir' => 'KS22151105101',
            'NamaKasir' => 'Ani Fikri',
            'HP' => '08221511051735',
        ]);

        Kasir::create([
            'KodeKasir' => 'KS22151105102',
            'NamaKasir' => 'Budi Hairul',
            'HP' => '08221511051745',
        ]);
    }
}
