<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
          'nama_lengkap' => 'admin',
          'email' => 'admin@gmail.com',
          'role' => 'admin',
          'password' => bcrypt('12345')
        ]);



        // User::create([

        //     'nisn' => '122323',
        //     'jk' => 'laki-laki',
        //     'nama_lengkap' => 'Jefry',
        //     'asal_sekolah' => 'SMP Penuh Harapan', 
        //     'email'=> 'jefry@gmail.com',
        //    'password' => bcrypt('122323'),
        //     'no_hp' => '0812121212',
        //     'no_hp_ayah' => '0823232323',
        //     'no_hp_ibu' => '0823232323',
        //     'role' => 'user'
        // ]);

        // pake ini tutor nyalain seedernya
        // php artisan db:seed --class=UserSeeder
      
    }
}
