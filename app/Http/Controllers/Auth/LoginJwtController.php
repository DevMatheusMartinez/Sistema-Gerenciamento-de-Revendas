<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Api\ApiMessages;
use Illuminate\Support\Facades\Validator;

class LoginJwtController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->all(['email', 'password']);

        Validator::make($credentials, [
            'email' => 'required|string',
            'password' => 'required|string',
        ])->validate();

        if(!$token = auth('api')->attempt($credentials)){
            $message = new ApiMessages('Unauthorized');
            return response()->json($message->getMessage(), 401);
        };
        
        return response()->json([
            'token' => $token
        ]);
    }

    public function logout(){
        auth('api')->logout();

        return response()->json(['message' => 'Logout sucessfully!'], 200);
    }

    public function refresh()
    {
        $token = auth('api')->refresh();

        return response()->json([
            'token' => $token
        ]);
    }
}
