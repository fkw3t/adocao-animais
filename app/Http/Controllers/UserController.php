<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use App\Rules\AgeMajority;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{

    public function index()
    {
        return view('user.perfil', ['user' => Auth::user()]); 
    }

    public function create()
    {
        // 
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:120'],
            'user' => ['required', 'max:15', 'unique:App\Models\User,user'],
            'phone_number' => ['required', 'numeric', 'digits:11'],
            'birth_date' => ['required', new AgeMajority],
            'document' => ['required', 'numeric', 'digits:11', 'unique:App\Models\User,document'],
            'email' => ['required', 'email', 'unique:App\Models\User,email'],
            'password' => ['required', Password::min(8)]
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->user = $request->user;
        $user->birth_date = $request->birth_date;
        $user->phone_number = $request->phone_number;
        $user->document = $request->document;
        $user->password = Hash::make($request->password);
        $user->save();

        Auth::login($user);

        return redirect('/');        
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        return view('user.edit', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => ['required', 'max:120'],
            'user' => ['required', 'max:15', 'unique:App\Models\User,user,' . $user->id],
            'phone_number' => ['required', 'numeric', 'digits:11'],
            'birth_date' => ['required', new AgeMajority],
            'document' => ['required', 'numeric', 'digits:11', 'unique:App\Models\User,document,' . $user->id],
            'address' => ['max:250'],
            'postcode' => ['numeric', 'digits:8'],
            'city' => ['max:100'],
            'state' => ['max:100'],
            'country' => ['max:100']
        ]);

        $user->update($data);
        $user->save();

        return redirect('/');
    }

    public function destroy(User $user)
    {
        //
    }
}
