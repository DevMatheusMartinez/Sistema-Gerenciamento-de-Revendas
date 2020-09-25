<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Models;
use App\Models\Veiculo;
use App\Http\Requests\ClientRequest;
use App\Api\ApiMessages;

class ClientController extends Controller
{
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function index()
    {
        $user = auth('api')->user();
        return $user->clients()->withCount('veiculo')->get();
    }

    public function show(int $id)
    {
        $client = auth('api')->user()->clients()->findOrFail($id);
        $client->load('veiculo');

        return $client;
    }

    public function store(ClientRequest $request)
    {
        $user = auth('api')->user();

        if(is_null($user)){
            abort(404, "Usuario não encontrado!");
        }

        Client::create([
            'user_id' => $user->id,
            'nome' => $request->nome, 
            'cpf' => $request->cpf, 
            'email' => $request->email,
            'telefone' => $request->telefone
        ]);

        return response()->json([
            'data' => 'Cliente Cadastrado com sucesso!'
        ], 200);
    }

    public function update($id, ClientRequest $request)
    {
            $data = $request->all();
            $client = auth('api')->user()->clients()->findOrFail($id);
            $client->update($data);
            return response()->json([
                    'data' => 'Cliente atualizado com sucesso!'
            ] ,200);
    }

    public function destroy($id)
    {
        $client = auth('api')->user()->clients()->findOrFail($id);
        $client->delete();
        return response()->json([
                    'data' => 'Cliente removido com sucesso!'
            ] ,200);
    }

}
