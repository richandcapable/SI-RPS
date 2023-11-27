<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name'     => 'Admin',
                'email'    => 'admin@gmail.com',
                'role'     => 'admin',
                'password' => bcrypt('admin')
            ],
            [
                'name'     => 'Ketua Prodi',
                'email'    => 'kaprodi@gmail.com',
                'role'     => 'kaprodi',
                'password' => bcrypt('kaprodi')
            ],
            [
                'name'     => 'Ketua Jurusan',
                'email'    => 'kajur@gmail.com',
                'role'     => 'kajur',
                'password' => bcrypt('kajur')
            ]
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
