<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\ServiceStatus;
use App\Models\ServiceType;
use App\Models\User;
use App\Models\Vehicle;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $date = $this->faker->dateTimeBetween('-20 weeks', 'now');
        $endDate = new Carbon($date);
        $endDate = $endDate->addHours($this->faker->numberBetween(1, 8));
        return [
            'registerUser_id' => User::inRandomOrder()->first()->id,
            'serviceUser_id' => User::inRandomOrder()->first()->id,
            'vehicle_id' => Vehicle::inRandomOrder()->first()->id,
            'serviceType_id' => ServiceType::inRandomOrder()->first()->id,
            'serviceStatus_id' => ServiceStatus::inRandomOrder()->first()->id,
            'estimatedTime' => $this->faker->numberBetween(30, 1440),
            'startTime' => $date,
            'endTime' => $endDate,

        ];
    }
}
