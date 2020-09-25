<?php

namespace App\Http\Controllers;
use App\Api\ApiMessages;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function store(UserRequest $request)
    {
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password)
        ]);
        
        return response()->json([
            'data' => 'Usuario Cadastrado com sucesso'
        ]);
    }

}
