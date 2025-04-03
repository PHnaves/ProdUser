<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index(){
        $users = User::paginate(15);
        return view('users.index', compact('users'));
    }


    public function create(){
        return view('users.create');
    }


    public function store(UserRequest $request){
        $data = $request->validated();
        $data['password'] = bcrypt($data['password']);
        
        User::create($data);
        return redirect()->route('users');
    }


    public function edit(string $id){

        if (!$user = User::find($id)){
            return redirect()->route('users');
        }

        return view('users.edit', compact('user'));
    }


    public function update(UserRequest $request, string $id){


        if (!$user = User::find($id)){
            return redirect()->route('users');
        }

        $data = $request->validated();
        
        if(isset($data['password'])){
            $data['password'] = bcrypt($data['password']);
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
