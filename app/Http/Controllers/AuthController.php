<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Log; // Tambahkan ini

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // file login.blade.php
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return view('home');
            // return redirect()->route('siswa.create'); 
        }

        // Tambahkan logging untuk debugging
        Log::error('Login failed', [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}


// public function showLogin()
//     {
//         return view('auth.login');
//     }

//     public function login(Request $request)
//     {
//         $credentials = $request->only('email', 'password');
//         if (Auth::attempt($credentials)) {
//             return redirect()->intended('/buku');
//         }

//         return redirect()->back()->with('error', 'Email atau password salah.');
//     }

//     public function logout()
//     {
//         Auth::logout();
//         return redirect()->route('login');
//     }