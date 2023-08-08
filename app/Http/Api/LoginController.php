<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        return response($response, 201);
    }

    public function logout()
    {
        return response(['message'=>'Logged Out Successfully']);
    }

    public function login(Request $request)
    {
        return response($data, 200); 
    }
}
