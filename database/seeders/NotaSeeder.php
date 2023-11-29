<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tenan::create([
            'KodeNota' => '',
            'KodeKasir' => '',
            'KodeTenan' => '',
            'TglNota' => '',
            'JumlahBelanja' => '',
            'Diskon' => '2',
            'Total' => '',
        ]);
    }
}
