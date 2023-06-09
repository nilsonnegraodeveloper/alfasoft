<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Tester',
            'email' => 'test@test.com',
            'password' => '$2y$10$LD95Sh6HGFnNaMRhb1vxbuZvx1RDWwDE5KApn0cyKfzrqFXu9vDa6', // password (123456)           
        ];
    }
}
