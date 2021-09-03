<?php

namespace Database\Factories;

use App\Helper\mHelper;
use App\Models\Brands;
use App\Models\Category;
use App\Models\TeamJerseys;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;
use Intervention\Image\Image;
use function Illuminate\Support\Facades\File;

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

        $images = array
        (
         'bjk-forma.jpg',
         'bs-forma.jpg',
         'lakers.jpg',
         'hollanda.jpg',
         'türkiye.jpg',
         'portekiz.jpg',
         'laker.jpg',
         'ingiltere.jpg',
        );
        return [

            $x= 'name' => $this->faker->name,
            'info' => $this->faker->text(rand(120,200)),
            'image' =>$images[rand(0,3)],
            'teamid' => rand(1,5),
            'brandid' => rand(1,3),
            'categoryid' => rand(1,3),
            'price'=> rand(100,500),
            'selflink'=> mHelper::permalink($x),
        ];

    }
}
