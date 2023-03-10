<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\Fakecar;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CarFactory extends Factory
{

    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $this->faker->addProvider(new Fakecar($this->faker));
        $vehicle = $this->faker->vehicleArray();

        return [
            'foto' => $this->faker->imageUrl(400, 400, 'car', true, $vehicle['brand'] . ' brand'),
            'cidade' => $this->faker->city,
            'marca' => $vehicle['brand'],
            'modelo' => $vehicle['model'],
            'descricao' => $this->faker->sentence(),
            'ano' => $this->faker->biasedNumberBetween(1990, date('Y'), 'sqrt'),
            'quilometragem' => $this->faker->numberBetween(1000, 5000),
            'cambio' => $this->faker->vehicleGearBoxType,
            'telefone' => $this->faker->tollFreePhoneNumber,
            'valor' => $this->faker->numberBetween(50000, 100000),
        ];
    }
}
