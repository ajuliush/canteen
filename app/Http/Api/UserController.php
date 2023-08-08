<?php

namespace App\Http\Controllers\Api;

use App\Http\Traits\ApiResponser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource;
class UserController extends Controller
{
     use ApiResponser;
     
    public function index()
    {
        
        $user = new UserResource(User::all());
        return $this->success($user, 'User featech successfully', 200);
    }
}
