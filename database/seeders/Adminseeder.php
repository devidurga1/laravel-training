<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;


class Adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'superadmin',
            'email'=> 'admin@gmail.com',
             'password'=> '123456',
        ]);
+
         $user->assignRole('customer','superadmin');
    }
}
