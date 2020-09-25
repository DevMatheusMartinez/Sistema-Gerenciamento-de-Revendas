<?php

namespace App\Http\Controllers;
use App\Http\Requests\VeiculoRequest;
use App\Models\Veiculo;
use App\Api\ApiMessages;

class VeiculoController extends Controller
{
    public function store(VeiculoRequest $request)
    {
        Veiculo::create([
            'client_id' => $request->client_id, 
            'placa' => $request->placa, 
            'marca' => $request->marca, 
            'modelo' => $request->modelo, 
            'cor' => $request->cor,
        ]);

        return response()->json([
            'data' => 'Veiculo cadastrado com sucesso!'
        ], 200);
    }
}

