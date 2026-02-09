<?php

namespace Database\Factories;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentFactory extends Factory
{
    protected $model = Appointment::class;

    public function definition(): array
    {
        return [
            'pet_name' => fake()->firstName(),
            'service' => fake()->randomElement([
                'Vaccination',
                'General Checkup',
                'Dental Cleaning',
                'Surgery Consultation',
            ]),
            'appointment_date' => fake()->dateTimeBetween('now', '+1 month'),
            'reason' => fake()->sentence(),
            'user_id' => User::factory(), // relationship
        ];
    }
}
