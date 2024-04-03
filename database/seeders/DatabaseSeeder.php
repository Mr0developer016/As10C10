<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserFactory::class);    // Create 50 users
        $this->call(CategorySeeder::class); // Create 10 categories
        $this->call(PostFactory::class)->times(200); // Create 200 posts
        $this->call(CommentFactory::class)->times(500); // Create 500 comments
    }
}
