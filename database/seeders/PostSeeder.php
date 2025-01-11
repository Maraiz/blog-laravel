<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $judul = [
            'Indonesia Tanah Air Beta', 
            'Pusaka Abadi Nan Jaya',
            'Indonesia Sejak Dulu Kala',
            'Selalu Dipuja-puja Bangsa'
        ];

        foreach ($judul as $j) {
            $slug = Str::slug($j);
            Post::create([
                'title' => $j,
                'slug' => $slug,
                'description' => 'Deskripsi untuk ' . $j,
                'content' => 'Konten untuk ' . $j,
                'status' => 'publish',
                'user_id' => '1'
            ]);
        }
    }
}
