<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $datas = [
            [
                'name' => 'dummy',
                'email' => 'dummy@gmail.com',
                'password' => bcrypt('dummy'),
                'role' => 'dummy',
                'is_active' => true,
            ],         
        ];

        foreach ($datas as $data) {
            $data_final = new User();
            $data_final->name = $data['name'];
            $data_final->email = $data['email'];
            $data_final->password = $data['password'];
            $data_final->role = $data['role'];
            $data_final->is_active = $data['is_active'];
            $data_final->save();
        }
    }
}
