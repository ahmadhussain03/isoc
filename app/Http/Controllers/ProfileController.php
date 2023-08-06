<?php

namespace App\Http\Controllers;

use Countries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('profile', ['user' => Auth::user()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,id,' . $user->id],
            'username' => ['required', 'string', 'max:255', 'unique:users,id,' . $user->id],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            'country' => ['required', 'string', 'max:255', 'in:' . implode(',', array_keys(Countries::getList('en', 'php')))]
        ]);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->country = $request->country;

        if (isset($request->password) && $request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        session()->flash('status', 'Profile Updated Successfully!');

        return redirect()->route('profile.index');
    }
}
