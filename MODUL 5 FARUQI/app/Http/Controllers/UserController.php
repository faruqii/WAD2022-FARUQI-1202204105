<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //

    /**
     * Register User
     * 
     * @param Request $request
     * @return response
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'no_hp' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed',
        ]);

        $user = new User([
            'name' => $request->input('name'),
            'no_hp' => $request->input('no_hp'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        $user->save();

        return redirect()->view('login')->with('success', 'Register Success');
    }

    /**
     * Login User
     * 
     * @param Request $request
     * @return response
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);


        // login user with email and password
        $credentials = request(['email', 'password']);
        if (!auth()->attempt($credentials))
            return redirect()->route('login')->with('error', 'Login Failed');

        return redirect('home')->with('success', 'Login Success');
    }

    /**
     * Logout User
     * 
     */
    public function logout()
    {
        auth()->logout();

        return redirect()->route('login')->with('success', 'Logout Success');
    }

    /**
     * Edit User
     * 
     * @param Request $request
     * @return response
     */
    public function edit(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'no_hp' => 'required|string',
            'password' => 'required|string|confirmed',
        ]);

        $user = User::where('email', '=', $request->input('email'))->first();

        $user->name = $request->input('name');
        $user->no_hp = $request->input('no_hp');
        $user->password = bcrypt($request->input('password'));

        $user->save();

        return response()->json([
            'message' => 'Successfully edited user!'
        ], 201);
    }
}
