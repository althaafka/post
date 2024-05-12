<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $request){
        $user_input = $request->validate([
            'name' => ['required','min:3','max:10', Rule::unique('users', 'name')],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $user_input['password'] = bcrypt($user_input['password']);
        $user = User::create($user_input);
        auth()->login($user);

        return redirect('/');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'loginname' => 'required',
            'loginpassword' => 'required'
        ]);

        if(auth()->attempt(['name' => $credentials['loginname'], 'password' => $credentials['loginpassword']])){
            $request->session()->regenerate();
        }

        return redirect('/');
    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }
}
