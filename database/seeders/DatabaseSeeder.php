<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use App\Models\Post;
use App\Models\Report;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $role_admin = Role::create(['name' => 'admin']);

        $user_admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);

        RoleUser::create([
            'user_id' => $user_admin->id,
            'role_id' => $role_admin->id,
        ]);

        User::create([
            'name' => 'nam',
            'email' => 'nam@gmail.com',
            'password' => bcrypt('nam12345678'),
        ]);

        $reports = [
            ['judul' => 'Bahasa Kotor', 'deskripsi' => 'Pengguna menggunakan kata-kata kotor di dalam post.'],
            ['judul' => 'Hoax', 'deskripsi' => 'Informasi yang disebarkan tidak benar atau menyesatkan.'],
            ['judul' => 'Penipuan', 'deskripsi' => 'Konten berisi usaha penipuan kepada orang lain.'],
            ['judul' => 'Pornografi', 'deskripsi' => 'Konten berisi gambar atau informasi berbau pornografi.'],
            ['judul' => 'Pembulian', 'deskripsi' => 'Post mengandung unsur bullying kepada pengguna lain.'],
            ['judul' => 'Pencemaran Nama Baik', 'deskripsi' => 'Konten ini menghina atau mencemarkan nama baik orang lain.'],
        ];

        foreach ($reports as $report) {
            Report::create($report);
        }
    }
}
