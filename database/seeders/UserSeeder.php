<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username'=>'Superadmin',
            'name' => 'superadmin',
            'password' => Hash::make('admin1234'),
            'role'=>'0',
        ]);
        
        User::create([
            'username'=>'AdminPengajuanDanPelaporan',
            'name' => 'Admin Pengajuan Dan Pelaporan',
            'password' => Hash::make('admin1234'),
            'role'=>'1',
        ]);
        User::create([
            'username'=>'AdminDigitasi',
            'name' => 'Admin Digitasi',
            'password' => Hash::make('admin1234'),
            'role'=>'2',
        ]);
        User::create([
            'username'=>'AdminKornologis',
            'name' => 'Admin Kornologis',
            'password' => Hash::make('admin1234'),
            'role'=>'3',
        ]);
        User::create([
            'username'=>'AdminMonitoring',
            'name' => 'Admin Monitoring',
            'password' => Hash::make('admin1234'),
            'role'=>'4',
        ]);
    }
}
