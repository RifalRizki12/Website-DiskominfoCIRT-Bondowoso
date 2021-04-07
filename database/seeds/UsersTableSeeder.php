<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\DataDiri;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role' => 'admin utama',
            'name' => 'Rizki',
            'email' => 'rizki@email.com',
            'password' => bcrypt('12345678'),
            'remember_token' => str_random(60),
        ]);
        DataDiri::create([
            'user_id' => 1,
            'nama_depan'=>'Rizki',
            'nama_belakang' => 'Atoilah',
            'jenis_kelamin' => 'Laki-Laki',
            'agama' => 'islam',
            'alamat' => 'jember',
            'nohp' => '081252523409',
        ]);
    }
}
