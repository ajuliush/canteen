<?php

namespace App\Http\Controllers\Api;

use App\Http\Traits\ApiResponser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Meeting;
use App\Http\Resources\MeetingResource;

class MeetingController extends Controller
{
    use ApiResponser;
     
    public function index()
    {
        
        $meeting = new MeetingResource(Meeting::all());
        return $this->success($meeting, 'Meeting featech successfully', 200);
    }
}
