<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;
use App\Api\ApiMessages;

class VeiculoController extends Controller
{
    private $veiculo;

    public function __construct(Veiculo $veiculo)
    {
        $this->veiculo = $veiculo;
    }


    public function store(Request $request)
    {
        $data = $request->all();
        try{
            $veiculo = $this->veiculo->create($data);
            return response()->json([
                'data' => [
                    'msg' => 'Veiculo cadastrado com sucesso!'
                ]
            ] ,200);
        }catch(\Exception $e){
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

}
