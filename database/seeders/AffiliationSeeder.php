<?php

namespace Database\Seeders;

use App\Models\Affiliation;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AffiliationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Affiliation::create([
            'name' => 'Hololive Production',
            'description' => 'A popular VTuber talent agency.',
        ]);

        Affiliation::create([
            'name' => 'Nijisanji',
            'description' => 'Another major VTuber agency.',
        ]);
    }
}
