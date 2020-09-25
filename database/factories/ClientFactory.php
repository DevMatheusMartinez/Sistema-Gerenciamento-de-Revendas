<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $user = User::factory()->create();

        return [
            'nome' => $this->faker->name,
            'cpf' => (string)$this->faker->randomNumber(),
            'email' => $this->faker->email,
            'telefone' => $this->faker->phoneNumber
        ];
    }
}
