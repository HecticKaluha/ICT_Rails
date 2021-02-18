<?php

namespace Database\Factories;

use App\Models\Line;
use App\Models\Vehicle;
use App\Models\VehicleClass;
use App\Models\VehicleStatus;
use App\Models\VehicleType;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehicle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'vehicleNr' => $this->faker->unique()->randomNumber($nbDigits = 5),
            'line_id' => Line::inRandomOrder()->first()->id,
            'vehicleType_id' => VehicleType::inRandomOrder()->first()->id,
            'vehicleClass_id' => VehicleClass::inRandomOrder()->first()->id,
            'vehicleStatus_id' => VehicleStatus::inRandomOrder()->first()->id,
            'length' => $this->faker->numberBetween(200, 2000),
        ];
    }
}
