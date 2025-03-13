<?php

namespace App\Http\Controllers;

use App\Http\Resources\Postresource;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $users = User::all();

        return Postresource::collection($users);
    }
}
