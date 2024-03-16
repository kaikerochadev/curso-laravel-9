<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::get();
    
        return view('users.index', ['users' => $users]);
    }

    public function show($id) {
        // $user = User::where('id', $id)->first();
        
        $user = User::find($id);

        if (!$user = User::find($id)) {
            return redirect()->route('users.index');
        }

        return view('users.show', ['user' => $user]);
    }

    public function create() {
        return view('users.create');
    }

    public function store(StoreUpdateUserFormRequest $request) {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);

        User::create($data);

        return redirect()->route('users.index');

        /* $user = New User;

        $user['name'] = ($request->name);
        $user['email'] = ($request->email);
        $user['password'] = ($request->password);

        $user->save();

        */
    }

    public function edit($id) {
        if (!$user = User::find($id)) {
            return redirect()->route('users.index');
        }

        return view('users.edit',['user' => $user]);
    }

    public function update($id) {
        if (!$user = User::find($id)) {
            return redirect()->route('users.index');
        }

        return redirect()->route('users.index');
    
    }
}
