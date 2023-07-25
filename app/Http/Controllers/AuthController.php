<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() : View
    {
        return view('login');
    }
    public function attempt(AccountRequest $request): RedirectResponse
    {
        $credentials = $request->only('username', 'password');

        if(Auth::attempt(['username' => $credentials['username'], 'password' => $credentials['password'], 'is_admin' => 1])) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->with('error', 'Invalid credentials!');
    }
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
