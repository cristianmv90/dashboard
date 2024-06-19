<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Metric;

class MetricsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $socialNetworks = ['Facebook', 'Twitter', 'Instagram', 'LinkedIn'];
        
        foreach ($socialNetworks as $network) {
            Metric::factory()->create([
                'platform' => $network,
            ]);
        }
    }
}
