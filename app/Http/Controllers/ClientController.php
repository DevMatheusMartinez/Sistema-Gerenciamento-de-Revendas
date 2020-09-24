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
        $client = auth('api')->user()->client();
        $quantidade = $client->withCount("veiculo")->get();
        return response()->json([
            $client->paginate(10)->sortBy('nome'),
            $quantidade
    ], 200);
    }

    public function show($id)
    {
        try{

            $client = auth('api')->user()->client()->findOrFail($id);
            $veiculos = Veiculo::with('cliente')->where('client_id', $id)->get();
            return response()->json([
                'data' => $client,
                'veiculos do cliente' => $veiculos,   
            ] ,200);
        }catch(\Exception $e){
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

    public function store(ClientRequest $request)
    {
        
        $data = $request->all();
        try{
            $data['user_id'] = auth('api')->user()->id;
            $client = $this->client->create($data);
            return response()->json([
                'data' => [
                    'msg' => 'Cliente cadastrado com sucesso!'
                ]
            ] ,200);
        }catch(\Exception $e){
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

    public function update($id, ClientRequest $request)
    {
        
        $data = $request->all();
        try{

            $client = auth('api')->user()->client()->findOrFail($id);
            $client->update($data);
            return response()->json([
                'data' => [
                    'msg' => 'Cliente atualizado com sucesso!'
                ]
            ] ,200);
        }catch(\Exception $e){
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

    public function destroy($id)
    {
        
        try{

            $client = auth('api')->user()->client()->findOrFail($id);
            $client->delete();
            return response()->json([
                'data' => [
                    'msg' => 'Cliente removido com sucesso!'
                ]
            ] ,200);
        }catch(\Exception $e){
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

}
