<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index(Request $request) {
        $users = $this->model->getUsers(search: $request->search ?? '');
    
        return view('users.index', ['users' => $users]);
    }

    public function show($id) {
        // $user = $this->model->where('id', $id)->first();

        if (!$user = $this->model->find($id)) {
            return redirect()->route('users.index');
        }

        return view('users.show', ['user' => $user]);
    }

    public function create() {
        return view('users.create');
    }

    public function store(StoreUpdateUserFormRequest $request) {
        $data = $this->model->storeUsers($request);

        if($request->image) {
            $data['image'] = $request->image->store('users');
        }

        $this->model->create($data);

        return redirect()->route('users.index');

        /* $user = New User;

        $user['name'] = ($request->name);
        $user['email'] = ($request->email);
        $user['password'] = ($request->password);

        $user->save();

        */
    }

    public function edit($id) {
        if (!$user = $this->model->find($id)) {
            return redirect()->route('users.index');
        }

        return view('users.edit', compact('user'));
    }

    public function update(StoreUpdateUserFormRequest $request, $id) {
        if (!$user = $this->model->find($id)) {
            return redirect()->route('users.index');
        }

        if($request->image) {
            if ($user->image && Storage::exists($user->image)) {
                Storage::delete($user->image);
            }
            $data['image'] = $request->image->store('users');
        }

        $data = $this->model->updateUsers($request);

        $user->update($data);

        return redirect()->route('users.index');
    }

    public function destroy($id) {
        if (!$user = $this->model->find($id)) {
            return redirect()->route('users.index');
        }

        $user->delete();

        return redirect()->route('users.index');
    }
    
}
