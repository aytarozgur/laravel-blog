<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      $title=$this->faker->sentence(6);
      return [
        'category_id' => rand(1,7),
        'title' => $title,
        'image'=>$this->faker->imageUrl(800, 400, 'cats', true),
        'content'=>$this->faker->paragraph(6),
        'slug'=>Str::slug($title)
      ];
    }
}
