<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            ['name' => 'Technology'],
            ['name' => 'Education'],
            ['name' => 'Sport'],
            ['name' => 'Wrestling'],
            ['name' => 'Enterteinmtment'],
            ['name' => 'News'],
            ['name' => 'Magazine'],
            ['name' => 'Application'],
            ['name' => 'Buissness'],
            ['name' => 'Jobs'],
        ]);
    }
}
