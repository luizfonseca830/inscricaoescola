<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        if (Auth::user()->tipo != 'Admin') {
            session()->put('error', 'Você não tem acesso a essa página!');
            return redirect()->route('home');
        }

        return view('users.index', ['users' => $model->paginate(15)]);
    }

    public function delete($id){
        $user = User::find($id);
        if($user->delete()){
            session()->put('sucess', 'Usuário deletado com sucesso!');
        }
        else {
            session()->put('error', 'Esse usuário não poder ser deletado!');
        }

        return redirect()->route('user.index');
    }

    public function show($id){
        $user = User::findOrFail($id);

        return view('auth.edit', [
            'usuario' => $user
        ]);
    }

    public function update($id, Request $request){
        $user = User::findOrFail($id);

        if ($request->password != $request->password_confirmation) {
            session()->put('error', 'As senhas não coincidem!');
            return redirect()->route('edit-user', $id);
        }
        $password = Hash::make($request->password);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
            'password_confirmation' => $password,
        ]);

        session()->put('sucess', 'O usuário foi alterado com sucesso!');
        return redirect()->route('home');
    }
}
