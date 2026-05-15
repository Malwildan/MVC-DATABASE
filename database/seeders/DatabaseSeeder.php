<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(4)->create();

        $owner = User::factory()->create([
            'name' => 'Database Demo User',
            'email' => 'database-demo@example.com',
            'active' => true,
        ]);

        Post::query()->create([
            'user_id' => $owner->id,
            'title' => 'Pengenalan Eloquent',
            'content' => 'Post ini digunakan untuk demonstrasi relasi User ke Post.',
        ]);

        Post::query()->create([
            'user_id' => $owner->id,
            'title' => 'Query Builder Dasar',
            'content' => 'Contoh ini menunjukkan penggunaan where dan orderBy.',
        ]);
    }
}
