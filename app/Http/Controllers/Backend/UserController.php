<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('backend.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:8|max:255',
            'role' => 'required||boolean',
            'address' => 'required|string',
            'gender' => 'required|in:Laki-laki, Perempuan',
        ]);

        $data = $request->all();

        $user = User::create($data);

        if($user){
            return redirect()->to('/user')->withSuccess('Data Ditambahkan');
        }else{
            return back()->withInput()->withErrors('Data Gagal Ditambahkan');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('backend.user.detail', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('backend.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'nullable|min:8|max:255',
            'role' => 'required||boolean',
            'address' => 'required|string',
            'gender' => 'required|in:Laki-laki, Perempuan',
        ]);

        $data = $request->all();

        if(!$request->password){
            unset($data['password']);
        }

        $user ->update($data);

        if ($user) {
            return redirect()->to('/user')->withSuccess('Data Diubah');
        } else {
            return back()->withInput()->withErrors('Data Gagal Diubah');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        if ($user) {
            return redirect()->to('/user')->withSuccess('Data Dihapus');
        } else {
            return back()->withInput()->withErrors('Data Gagal Dihapus');
        }
    }
}
