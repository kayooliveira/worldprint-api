<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function register (Request $request, User $user){
        try {
            $data = $request->only('name','email','password');

            $user = new User();
            $user->name = $data['name'];
            $user->password = Hash::make($data['password']);
            $user->email = $data['email'];
            $user->save();

            $token = $user->createToken('auth_token');
            return response()->json([
                "token" => $token->plainTextToken,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "success"=>false,
                "data"=>$th->getMessage()
            ]);
        }
    }

    public function login (Request $request, User $user){
        try{

            $data = $request->only('email','password');
            $user = User::where(['email' => $data['email']])->first();

            $user = Hash::check($user->password,$data['password'])?:$user;

            $token = $user->createToken('auth_token');
            return response()->json([
                "token" => $token->plainTextToken,
            ]);

        } catch (\Throwable $th) {
            return response()->json([
                "success"=>false,
                "data"=>$th->getMessage()
            ]);
        }
    }

    public function logout (Request $request, User $user){
        try {
        $token = request()->user()->currentAccessToken()->delete();
        return response()->json([
            "success" => true,
            "token" => null,
        ]);
        } catch (\Throwable $th) {
            return response()->json([
                "success"=>false,
                "data"=>$th->getMessage()
            ]);
        }
    }
}
