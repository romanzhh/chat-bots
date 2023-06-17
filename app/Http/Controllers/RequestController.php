<?php

namespace App\Http\Controllers;

use App\Models\Request as UsersRequest;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    //
    public function createRequest(Request $request)
    {
        $data = $request->input();
        unset($data['_token']);
        UsersRequest::create($data);
    }
}
