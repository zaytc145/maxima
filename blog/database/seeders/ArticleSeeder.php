<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Comment;
use App\Models\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::factory()
            ->count(50)
            ->has(Comment::factory()->hasReplies(3))
            ->hasTags(5)
            ->hasEditors(2)
            ->hasViews(10)
            ->create();
    }
}
