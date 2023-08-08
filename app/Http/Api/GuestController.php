<?php

namespace App\Http\Controllers\Api;

use App\Http\Traits\ApiResponser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guest;
use App\Http\Resources\GuestResource;

class GuestController extends Controller
{
    use ApiResponser;
     
    public function index()
    {
        
        $guest = new GuestResource(Guest::all());
        return $this->success($guest, 'Guest featech successfully', 200);
    }
}
