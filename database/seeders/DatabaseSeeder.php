<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kategori;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Administrator',
            'email' => 'admin@admin.com',
            'role' => '1',
            'status' => 1,
            'hp' => '0812345678901',
            'password' => bcrypt('P@55word'),
        ]);
        User::create([
            'nama' => 'Hikmatulloh',
            'email' => 'hikmatulloh@admin.com',
            'role' => '0',
            'status' => 1,
            'hp' => '0812345678902',
            'password' => bcrypt('Hikmat@123'),
        ]);

        #data kategori
        Kategori::create([
            'nama_kategori' => 'Kue Kering',
        ]);
        Kategori::create([
            'nama_kategori' => 'Tradisional',
        ]);
        Kategori::create([
            'nama_kategori' => 'Butter Cake',
        ]);
        Kategori::create([
            'nama_kategori' => 'Foam Cake',
        ]);
        Kategori::create([
            'nama_kategori' => 'Cookies',
        ]);
    }
}
