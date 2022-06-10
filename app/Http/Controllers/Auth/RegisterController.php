<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function __construct()
    {
      $this->middleware(['guest']);
    }
    public function index()
    {
      return view('auth.register');
    }

    public function store(Request $request)
    {
        //validation
        $this->validate($request, [
          'name' => 'required|string|max:20',
          'username' => 'required|string|max:20',
          'email' => 'required|email|unique:users,email',
          'phone' => 'required|numeric|min:9',
          'password' => [
            'required',
            'string',
            'min:6',             // must be at least 10 characters in length
            // 'regex:/[a-z]/',      // must contain at least one lowercase letter
            // 'regex:/[A-Z]/',      // must contain at least one uppercase letter
            // 'regex:/[0-9]/',      // must contain at least one digit
            // 'regex:/[@$!%*#?&]/', // must contain a special character
          ],
          'confirm_password' => 'required|same:password'          
        ]);
        //store user
        User::create([
          'name' => $request->name,
          'username' => $request->username,
          'email' => $request->email,
          'phone' => $request->phone,
          'password' => Hash::make($request->password),
        ]);

        //sign the user in
        auth()->attempt($request->only('email', 'password'));
        //redirect
        return redirect()->route('home');
    }
}
