<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(5)->create([
            // 'name' => 'Test User',
            // 'email' => 'test@example.com',
        ]);

        User::factory(1)->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'password',
        ]);

        Book::factory(10)->create();

        Category::factory()->create([
            'category' => 'Novel'
        ]);
        Category::factory()->create([
            'category' => 'Fiksi'
        ]);
        Category::factory()->create([
            'category' => 'Non Fiksi'
        ]);
        Category::factory()->create([
            'category' => 'Komik'
        ]);
    }
}
