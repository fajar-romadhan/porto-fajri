<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Generate Categories
        $categories = [
            ['name' => 'Prewed Indoor', 'slug' => 'prewed-indoor'],
            ['name' => 'Prewed Outdoor', 'slug' => 'prewed-outdoor'],
            ['name' => 'Wisuda', 'slug' => 'wisuda'],
            ['name' => 'Wedding', 'slug' => 'wedding'],
        ];
        foreach ($categories as $cat) {
            \App\Models\Category::firstOrCreate(['slug' => $cat['slug']], $cat);
        }

        // Generate Text Contents
        \App\Models\Content::firstOrCreate(['section' => 'hero_title'], [
            'content' => "Timeless Moments,<br>Captured Clean."
        ]);
        \App\Models\Content::firstOrCreate(['section' => 'about_text'], [
            'content' => "Berfokus pada estetika minimalis dan keaslian momen. Setiap karya dihasilkan melalui observasi cahaya yang tenang dan komposisi yang bersih, memastikan kenangan Anda abadi dan elegan."
        ]);
    }
}
