<?php

namespace Database\Factories;

use App\Models\SnowBank;
use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

class SnowBankFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SnowBank::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'supplies'  => $this->faker->word,
            'description' => $this->faker->realText($maxNbChars = 150, $indexSize = 2),
            'location_id' => Location::factory()
        ];
    }
}
