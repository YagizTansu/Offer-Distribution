<?php

namespace Database\Factories;
use App\Models\Ship;
use Illuminate\Database\Eloquent\Factories\Factory;

class shipFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ship::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween($min = 31, $max = 31),
            'name' => $this->faker->name(),
            "latitude" => $this->faker->latitude($min = -90, $max = 90),
            "longitude" => $this->faker->longitude($min = -180, $max = 180),
            'radius' => $this->faker->numerify('######'),
            'price' =>  $this->faker->numberBetween($min = 1500, $max = 6000),
            'currency_id' =>  $this->faker->numberBetween($min = 1, $max = 1),
        ];
    }
}
