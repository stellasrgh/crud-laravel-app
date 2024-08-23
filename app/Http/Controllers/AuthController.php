<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signIn()
    {
        return view('auth.login');
    }
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required', 'email',
            'password' => 'required',
        ]);

        if ($user = User::where('email', $request->email)->first()) {
            if (Hash::check($request->password, $user->password)) {

                Auth::login($user);

                return redirect()->intended('/dashboard');
            } else {
                return back()->withInput()->withErrors('Password Salah');
            }
        } else {
            return back()->withInput()->withErrors('Email Tidak Ditemukan');
        }
    }

    public function signUp(){
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required', 'email|unique:users|max:255',
            'password' => 'required|min:8|max:255',
            'address' => 'required|string',
            'gender' => 'required|in:Laki-laki, Perempuan',
        ]);

        $data = $request->all();
        $data['role'] = 0;

        $user = User::create($data);
        if ($user) {
            Auth::login($user);

            return redirect()->intended('/dashboard');
        } else {
            return back()->withInput()->withErrors('Anda Gagal Register');
        }

    }
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->to('/sign-in');
    }
}
