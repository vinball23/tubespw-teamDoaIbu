<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Country;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        Category::create([
            'name' => 'Appetizer',
            'slug' => 'appetizer'
        ]);

        Category::create([
            'name' => 'Main Course',
            'slug' => 'main-course'
        ]);

        Category::create([
            'name' => 'Dessert',
            'slug' => 'dessert'
        ]);

        Country::create([
            'name' => 'India',
            'slug' => 'in'
        ]);
        Country::create([
            'name' => 'Indonesia',
            'slug' => 'id'
        ]);
        Country::create([
            'name' => 'Italy',
            'slug' => 'it'
        ]);
        Country::create([
            'name' => 'Japan',
            'slug' => 'jp'
        ]);
        Country::create([
            'name' => 'Korea',
            'slug' => 'kr'
        ]);
        Country::create([
            'name' => 'Turkey',
            'slug' => 'tr'
        ]);

        Post::factory(20)->create();

    }
}
