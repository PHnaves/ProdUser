<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::paginate(15);
        return view('users.index', compact('users'));
    }


    public function create(){
        return view('users.create');
    }


    public function store(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
    
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('users');
    }


    public function edit(string $id){

        if (!$user = User::find($id)){
            return redirect()->route('users');
        }

        return view('users.edit', compact('user'));
    }


    public function update(Request $request, string $id){


        if (!$user = User::find($id)){
            return redirect()->route('users');
        }

        $data = $request->only('name', 'email');
        
        if($request->password){
            $data['password'] = bcrypt($request->password);
        }

        $user->update($data);

        return redirect()->route('users');
    }

    public function show(string $id){

        if (!$user = User::find($id)){
            return redirect()->route('users');
        }
        return view('users.show', compact('user'));
    }

    public function destroy(string $id){

        if (!$user = User::find($id)){
            return redirect()->route('users');
        }

        $user->delete();
        return redirect()->route('users');
    }
}
