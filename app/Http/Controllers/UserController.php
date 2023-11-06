<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function store(Request $request)
    {
        $user = User::create([
            'UserName' => $request->UserName,
            'UserEmail' => $request->UserEmail,
            'UserPassword' => bcrypt($request->UserPassword),
        ]);
        return response($user);
    }
}
