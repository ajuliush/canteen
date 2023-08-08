<?php

namespace App\Http\Controllers\Api;

use App\Http\Traits\ApiResponser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\People;
use App\Http\Resources\PeopleResource;

class PeopleController extends Controller
{
      use ApiResponser;
     
    public function index()
    {
        
        $people = new PeopleResource(People::all());
        return $this->success($people, 'People featech successfully', 200);
    }
}
