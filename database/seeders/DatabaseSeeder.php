<?php

namespace Database\Seeders;
use App\Models\Prodi;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        Prodi::create(
            [
                'nama' => 'teknik Informatika'
            ]
        );
        Prodi::create(
            [
                'nama' => 'Manajemen Informatika'
            ]
        );
        Prodi:: create(
            [
                'nama' => 'Sistem Informasi'
            ]
        );



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}