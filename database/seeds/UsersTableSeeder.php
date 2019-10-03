<?php

use Illuminate\Database\Seeder;
use App\User;
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
            'email'      => 'admin@gmail.com',
            'password'   => bcrypt('adminn'),
            'first_name' => 'Admin',
            'birthday'   => '1998-02-15',
            'role_id'    => 1,
        ]);
        User::create([
            'email'      => 'sale@gmail.com',
            'password'   => bcrypt('saleman'),
            'first_name' => 'Nhân viên',
            'birthday'   => '1998-02-15',
            'role_id'    => 2,
        ]);
        User::create([
            'email'      => 'nguyensyhung@gmail.com',
            'password'   => bcrypt('hungdeptrai'),
            'first_name' => 'Hung',
            'birthday'   => '1998-02-15',
            'role_id'    => 3,
        ]);
    }
}
