<?php

namespace Database\Factories;

use App\Models\today_todos;
use Illuminate\Database\Eloquent\Factories\Factory;

class todayFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\today_todos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title'=>$this->faker->word,
        ];
    }
}
