<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Dataawal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = 'adminnistrator';
        $admin->email = 'tiara@gmail.com';
        $admin->password = bcrypt('12345678910');
        $admin->nik = '6171101020060000123';
        $admin->telp = '083167890604';
        $admin->level = 'admin';
        $admin->save();

        $petugas = new User();
        $petugas->name = 'bellasambong';
        $petugas->email = 'bella@gmail.com';
        $petugas->password = bcrypt('345678910');
        $petugas->nik = '617189456789';
        $petugas->telp = '083160755412';
        $petugas->level = 'petugas';
        $petugas->save();
    }
}
