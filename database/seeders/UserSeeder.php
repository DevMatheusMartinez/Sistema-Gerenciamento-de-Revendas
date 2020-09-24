<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(User $user)
    {

        for($contador = 1; $contador <=5; $contador++)
        {
            $user->create([
                'name' => 'Usuario '.$contador,
                'email' => 'email'.$contador.'@hotmail.com',
                'password' => '123456'
            ]);
        }
        
    }
}
