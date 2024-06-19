<?php

namespace Database\Factories;

use App\Models\Metric;
use Illuminate\Database\Eloquent\Factories\Factory;

class MetricFactory extends Factory
{
    protected $model = Metric::class;

    public function definition(): array
    {
        return [
            'platform' => $this->faker->randomElement(['Facebook', 'Twitter', 'Instagram', 'LinkedIn']),
            'followers' => $this->faker->numberBetween(1000, 100000),
            'engagement_rate' => $this->faker->numberBetween(1, 100),
        ];
    }
}

