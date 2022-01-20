<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use App\Models\UserDetail;

class UserController extends Controller {
    function index(){
        $data['list_user'] = User::withCount('produk')->get();
        return view('user.index', $data);
    }
    function create(){
        return view('user.create');
    }
    function store(UserStoreRequest $request){

        // $validated = request()->validate([
        //     'nama' => ['required'],
        //     'username' => ['required'],
        //     'email' => ['required']
        // ]);

        $user = new User;
        $user->nama = request('nama');
        $user->user_name = request('user_name');
        $user->email = request('email');
        $user->password = request('password');
        $user->jenis_kelamin = 2;
        $user->save();

        $user_detail = new UserDetail;
        $user_detail->id_user = $user->id;
        $user_detail->no_handphone = request('no_handphone');
        $user_detail->save();

        return redirect('admin/user')->with('success', 'Data Berhasil Ditambahkan');

    }
    function show(User $user){
        $data['user'] =  $user;
        return view('user.show', $data);

    }
    function edit(User $user){
        $data['user'] =  $user;
        return view('user.edit', $data);

    }
    function update(User $user){
        $user->nama = request('nama');
        $user->user_name = request('user_name');
        $user->email = request('email');
        if(request('password')) $user->password = request('password');
        $user->save();

        $user_detail = new UserDetail;
        $user_detail->id_user = $user->id;
        $user_detail->no_handphone = request('no_handphone');
        $user_detail->save();
    
        return redirect('admin/user')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(User $user){
        $user->delete();

        return redirect('admin/user')->with('danger', 'Data Berhasil Dihapus');

    }
}