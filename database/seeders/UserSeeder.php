<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            (object) array(
                'name' => 'nguyen thanh cong',
                'email' => 'cong@gmail.com',
                'role' => 1
            ), 
            (object) array(
                'name' => 'nguyen thanh cong',
                'email' => 'cong1@gmail.com',
                'role' => 2
            ), ];
            foreach ($users as $user) {
                $userModel = new User();
                $userModel->name = $user->name;
                $userModel->email = $user->email;
                $userModel->password = bcrypt($user->email);
                $userModel->save();
    
                $role = Role::where('id', '=', $user->role)->firstOrFail();
                $userModel->assignRole($role);
            }
    }
}
