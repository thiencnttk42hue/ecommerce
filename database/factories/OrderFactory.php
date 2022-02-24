<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->company(),
            'desc'=>$this->faker->catchPhrase(),
            'status'=>1,
            'customer_id'=>1,
            'phone'=>$this->faker->e164PhoneNumber(),
            'address'=>$this->faker->streetName(),
        ];
    }
}
