<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeder untuk memasukkan admin ke dalam tabel Users
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
        ]);

        // Seeder untuk memasukkan beberapa craftman ke dalam tabel Users
        DB::table('users')->insert([
            [
                'name' => 'Sonny Suharto',
                'email' => 'suharto@gmail.com',
                'password' => bcrypt('suharto123'),
                'role' => 'craftman',
                'alias' => 'SHT',
            ],
            [
                'name' => 'Syamsul Arifin',
                'email' => 'arifin@gmail.com',
                'password' => bcrypt('arifin123'),
                'role' => 'craftman',
                'alias' => 'ARF',
            ],
            [
                'name' => 'Sugeng Handi Pranoto',
                'email' => 'pranoto@gmail.com',
                'password' => bcrypt('pranoto123'),
                'role' => 'craftman',
                'alias' => 'PRT',
            ],
            [
                'name' => 'Eddy Sujarwo',
                'email' => 'sujarwo@gmail.com',
                'password' => bcrypt('sujarwo123'),
                'role' => 'craftman',
                'alias' => 'SJW',
            ],
            [
                'name' => 'Siono Nur Rizky',
                'email' => 'rizky@gmail.com',
                'password' => bcrypt('rizky123'),
                'role' => 'craftman',
                'alias' => 'RZK',
            ],
            [
                'name' => 'Ummi Nadziroh Nur Afifah',
                'email' => 'afifah@gmail.com',
                'password' => bcrypt('afifah123'),
                'role' => 'craftman',
                'alias' => 'AFH',
            ],
            [
                'name' => 'Sri Handayani',
                'email' => 'handayani@gmail.com',
                'password' => bcrypt('handayani123'),
                'role' => 'craftman',
                'alias' => 'HND',
            ],
            [
                'name' => 'TH Elvi Yuniwesti',
                'email' => 'yuniwesti@gmail.com',
                'password' => bcrypt('yuniwesti123'),
                'role' => 'craftman',
                'alias' => 'YWS',
            ],
            [
                'name' => 'Susiyanti',
                'email' => 'susiyanti@gmail.com',
                'password' => bcrypt('susiyanti123'),
                'role' => 'craftman',
                'alias' => 'SYT',
            ],
            [
                'name' => 'Joko Purnomo',
                'email' => 'purnomo@gmail.com',
                'password' => bcrypt('purnomo123'),
                'role' => 'craftman',
                'alias' => 'PRN',
            ],
            [
                'name' => 'Rita Octavia',
                'email' => 'octavia@gmail.com',
                'password' => bcrypt('octavia123'),
                'role' => 'craftman',
                'alias' => 'OCT',
            ],
            [
                'name' => 'Juwadi',
                'email' => 'juwadi@gmail.com',
                'password' => bcrypt('juwadi123'),
                'role' => 'craftman',
                'alias' => 'juwadi',
            ],
            [
                'name' => 'Akhmad Wiyono',
                'email' => 'wiyono@gmail.com',
                'password' => bcrypt('wiyono123'),
                'role' => 'craftman',
                'alias' => 'WYN',
            ],
            [
                'name' => 'Sulastri',
                'email' => 'sulastri@gmail.com',
                'password' => bcrypt('sulastri123'),
                'role' => 'craftman',
                'alias' => 'SLT',
            ],
            [
                'name' => 'Anis',
                'email' => 'anis@gmail.com',
                'password' => bcrypt('anis1234'),
                'role' => 'craftman',
                'alias' => 'ANS',
            ],
            [
                'name' => 'Kartikawati',
                'email' => 'kartikawati@gmail.com',
                'password' => bcrypt('kartikawati123'),
                'role' => 'craftman',
                'alias' => 'KWT',
            ],
            [
                'name' => 'Sulton Yohanis Hanis',
                'email' => 'hanis@gmail.com',
                'password' => bcrypt('hanis123'),
                'role' => 'craftman',
                'alias' => 'HNS',
            ],
            [
                'name' => 'Sri Bawon',
                'email' => 'bawon@gmail.com',
                'password' => bcrypt('bawon123'),
                'role' => 'craftman',
                'alias' => 'BWN',
            ],
            [
                'name' => 'Ratna Dyah P',
                'email' => 'dyah@gmail.com',
                'password' => bcrypt('dyah1234'),
                'role' => 'craftman',
                'alias' => 'DYP',
            ],
            [
                'name' => 'Djumani',
                'email' => 'djumani@gmail.com',
                'password' => bcrypt('djumani123'),
                'role' => 'craftman',
                'alias' => 'DJM',
            ],
            [
                'name' => 'Yeni Rahmawati',
                'email' => 'rahmawati@gmail.com',
                'password' => bcrypt('rahmawati123'),
                'role' => 'craftman',
                'alias' => 'RWT',
            ]
        ]);

        // Seeder untuk memasukkan customer ke dalam tabel Users
        User::create([
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('user1234'),
            'role' => 'customer',
        ]);
    }
}
