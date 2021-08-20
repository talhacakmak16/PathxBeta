<?php

namespace Database\Factories;

use App\Helper\mHelper;
use App\Models\Brands;
use App\Models\Category;
use App\Models\TeamJerseys;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamJerseyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TeamJerseys::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       $images = \App\Models\TeamJerseys::query()->get('image');
        return [

            'name' => $this->faker->name,
            'info' => $this->faker->text(rand(120,200)),
            'image' => $images,
            'teamid' => rand(1,5),
            'brandid' => rand(1,3),
            'categoryid' => rand(1,3),
            'price'=> rand(100,500),
            'selflink'=> mHelper::permalink('name'),

        ];

    }
}
