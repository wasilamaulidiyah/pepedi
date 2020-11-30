<?php

use \App\User;
use Illuminate\Database\Seeder;

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
        	'id' => 1,
        	'role' => 'admin',
        	'name' => 'admin user',
			'email' => 'a@gmail.com',
			'password' => bcrypt('a'),
        ]);
        User::create([
        	'id' => 2,
        	'role' => 'petani',
        	'name' => 'user petani',
			'email' => 'p@gmail.com',
			'password' => bcrypt('p'),
			'nohp' => '08233213321',
			'jenis_kelamin' => 'laki-laki',
			'alamat' => 'rogojampi banyuwangi',
			'pekerjaan' => 'buruh tani',
        ]);
    }
}
