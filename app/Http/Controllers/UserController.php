<?php

namespace App\Http\Controllers;
use App\Api\ApiMessages;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $user = $this->user->paginate('10');

        return response()->json($user, 200);
    }

    public function store(UserRequest $request)
    {
        $data = $request->all();

        if(!$request->has('password') || !$request->get('password'))
        {
            $message = new ApiMessages('É necessario informar uma senha de usuario!');
            return response()->json($message->getMessage(), 401);
        }

        try{
            $data['password'] = bcrypt($data['password']);

            $user = $this->user->create($data);
            return response()->json([
                'data' => [
                    'msg' => 'Usuario cadastrado com sucesso!'
                ]
            ] ,200);
        }catch(\Exception $e){
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

}
