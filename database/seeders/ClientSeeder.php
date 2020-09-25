<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;
use App\Models\User;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Client $client)
    {
        $users = User::all();

        $users->each(function($user){
            Client::factory([
                'user_id' => $user->id
            ])->count(10)->create();
        });
        
    }
}
