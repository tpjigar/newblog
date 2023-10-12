<?php

namespace Database\Factories;

use App\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Opening>
 */
class OpeningFactory extends Factory
{
    public function definition() : array
    {
        $city = fake()->city();

        $country = fake()->country();

        $remote = collect([
            'non-remote',
            'partially remote',
            'remote',
        ])->random();

        $title = collect([
            'back-end Laravel developer',
            'front-end React developer',
            'front-end Vue.js developer',
            'full-stack Laravel developer',
            'full-stack PHP developer',
            'full-stack WordPress developer',
        ])->random();

        return [
            'company' => fake()->company(),
            'title' => $title = ucfirst("$remote $title in $city, $country"),
            'slug' => Str::slug($title),
            'description' => fake()->paragraphs(3, true),
            'link' => fake()->url(),
            'location' => "$city, $country",
            'remote_status' => collect(['remote', 'partially remote', 'on-site'])->random(),
            'minimum_salary' => collect([25000, 30000, 35000])->random(),
            'maximum_salary' => collect([45000, 50000, 55000])->random(),
            'created_at' => fake()->dateTimeBetween('-1 month'),
        ];
    }
}
