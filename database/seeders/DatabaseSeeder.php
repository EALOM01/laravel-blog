<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // only need if not refreshing tables
        // User::truncate();
        // Post::truncate();
        // Category::truncate();

        $user = User::factory(5)->create();

        $category = Category::factory(5)->create();

        for ($i = 0; $i <= 25; $i++) {
            Post::factory()->create([
                'user_id' => random_int($user->first()->id, $user->last()->id),
                'category_id' => random_int($category->first()->id, $category->last()->id)
            ]);
        }
    }
}
