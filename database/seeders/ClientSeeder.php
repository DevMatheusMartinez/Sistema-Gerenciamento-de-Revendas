<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Client $client)
    {

        for($id_usuario = 1; $id_usuario <=5; $id_usuario++)
        {
            for($contador = 1; $contador <=10; $contador++)
            {
                $client->create([
                    'user_id' => $id_usuario, 
                    'nome' => 'cliente'.$contador,
                    'cpf' => '11111111111',
                    'email' => 'email'.$contador.'@hotmail.com',
                    'telefone' => '298930933090'
                ]);
            }
        }
        
    }
}
