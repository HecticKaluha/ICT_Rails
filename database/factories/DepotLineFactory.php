<?php

namespace Database\Factories;

use App\Models\Depot;
use App\Models\DepotLine;
use App\Models\DepotLineCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepotLineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DepotLine::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $number = 1;
        return [
            'lineNr' => $number++,
            'depot_id' => Depot::inRandomOrder()->first()->id,
            'depotLineCategory_id' => DepotLineCategory::inRandomOrder()->first()->id,
            'length' => $this->faker->numberBetween(2000, 20000),
            'blocked' => $this->faker->boolean,
        ];
    }
}
