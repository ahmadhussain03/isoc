<?php

namespace App\Http\Controllers\Admin;

use Countries;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::query()->whereNot('role', 'admin')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.user.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'country' => ['required', 'string', 'max:255', 'in:' . implode(',', array_keys(Countries::getList('en', 'php')))],
            'role' => ['required', 'string', 'in:young,student,individual,professional,corporate,election_comission'],
        ]);

        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'country' => $request->country,
            'role' => $request->role,
            'email_verified_at' => now()
        ]);

        session()->flash('status', 'User Created Successfully!');

        return redirect()->route('admin.user.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.user.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
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

        session()->flash('status', 'User Updated Successfully!');

        return redirect()->route('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        session()->flash('status', 'User Deleted Successfully!');
        return redirect()->back();
    }
}
