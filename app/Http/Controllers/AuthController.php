<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    protected function redirectTo()
    {
        return route('tasks.showIndex');
    }

    protected function authenticated(Request $request, $user)
    {
        $request->session()->put('user', $user->toArray());
    }
}
