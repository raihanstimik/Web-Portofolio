<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Database\Seeders\UserSeeder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     // Fetch all users
     $users = User::get();

     // Pass the users to the view
     return view('admin.user.index', compact('users'));
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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required','confirmed','min:8',
            'role' => 'required',
        ]);

        // Buat user baru
        $user=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role,
        ]);
        if (!$user){
            return redirect()->route('user.create')->with('error', 'Registration failed.');
        }

        // Redirect atau kirim respons
        return redirect()->route('user.index')->with('success', 'Registration successful.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::where('id',$id)->first();
        return view('admin.user.edit')->with('users',$users);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required','confirmed','min:8',
        ]);
        $users=[
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
        User::where('id',$id)->update($users);
        return redirect()->route('user.index')->with('success','Berhasil melakukan UPDATE data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        // //delete image
        // user::delete('admin'. $users->data);
        
        //delete data
        user::where('id',$id)->delete();
        return redirect()->route('user.index')->with('success','Berhasil melakukan delete data');
    }
}

