<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

         $images = [
        'events/event1.jpg',
        'events/event2.jpg',
        'events/event3.jpg',
    ];
        return [
           'name' => fake()->sentence(3),
            'description' => fake()->paragraph(),
            'img' => $images[array_rand($images)], 
            'location' => fake()->city(),
        ];
    }
}
