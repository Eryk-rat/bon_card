<?php

namespace Database\Factories;

use App\Models\Card;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{

    protected $model = Card::class;

    private static $nextCardNumber = 0; // Początkowa wartość numeru karty
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        self::$nextCardNumber++;


        $cardNumber = str_pad(self::$nextCardNumber, 20, '0', STR_PAD_LEFT);
        return [
                'card_number' => $cardNumber, 
                'pin' => $this->faker->numerify('####'), 
                'activation_date' => $this->faker->dateTimeBetween('now', '+1 month'),
                'expiration_date' => $this->faker->dateTimeBetween('+1 month', '+10 month'),
                'balance' => $this->faker->randomFloat(2, 10, 1000), 
        ];
    }
}
