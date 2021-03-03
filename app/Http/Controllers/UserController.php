<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRegisterRequest;

class UserController extends Controller
{
    public function registr(UserRegisterRequest $request){
    	User::create($request->validated());
    }

    public function getUser($userId){
        return response()->json([
            'data' => User::find($userId),
        ]);
    }

    public function deleteUser($userId){
    	return response()->json([
            'data' => User::destroy($userId),
        ]);
    }
}
