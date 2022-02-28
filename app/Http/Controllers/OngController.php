<?php

namespace App\Http\Controllers;

use App\Models\Ong;
use App\Rules\AgeMajority;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class OngController extends Controller
{
    public function index()
    {
        if(!Auth::guard('ong')->user())
        {
            return redirect('/ong/signin');
        }
        return view('ong.perfil', ['user' => Auth::guard('ong')->user()]);
    }

    // public function create()
    // {
    //     if(Auth::check())
    //     {
    //         return redirect('/');
    //     }
    //     return view('ong.register');
    // }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:220'],
            'phone_number' => ['required', 'numeric', 'digits:11'],
            'document' => ['required', 'numeric', 'digits:11', 'unique:App\Models\Ong,document'],
            'email' => ['required', 'email', 'unique:App\Models\Ong,email'],
            'password' => ['required', Password::min(8)]
        ]);

        $ong = new Ong();
        $ong->name = $request->name;
        $ong->email = $request->email;
        $ong->phone_number = $request->phone_number;
        $ong->document = $request->document;
        $ong->password = Hash::make($request->password);
        $ong->save();

        Auth::guard('ong')->login($ong);

        return redirect('/');  
    }

    public function show(Ong $ong)
    {
        // 
    }

    public function edit(Ong $ong)
    {
        return view('ong.edit', ['user' => $ong]);
    }

    public function update(Request $request, Ong $ong)
    {
        $data = $request->validate([
            'name' => ['required', 'max:120'],
            'user' => ['required', 'max:15', 'unique:App\Models\User,user,' . $ong->id],
            'phone_number' => ['required', 'numeric', 'digits:11'],
            'document' => ['required', 'numeric', 'digits:11', 'unique:App\Models\User,document,' . $ong->id],
            'address' => ['max:250'],
            'postcode' => ['numeric', 'digits:8'],
            'city' => ['max:100'],
            'state' => ['max:100'],
            'country' => ['max:100']
        ]);

        $ong->update($data);
        $ong->save();

        return redirect('/');
    }

    public function destroy($id)
    {
        //
    }
}
