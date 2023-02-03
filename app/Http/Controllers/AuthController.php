<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth as AuthLogin;

class AuthController extends Controller
{
    public function view_Registpage()
    {
        return view('auth.register');
    }

    public function signUp_store( Request $request )
    {
        $this->validate($request, [
            'password' => 'required|confirmed|min:5',
        ]);

        $checkEmail = Auth::where('no_hp', $request->no_hp)->first();
        if ( $checkEmail ) {
            return redirect()->back()->with('error', 'No HP Sudah Terdaftar');
        }

        Auth::create([
            'name' => $request->name,
            'no_hp' => $request->no_hp,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);

        return redirect("/")->with('berhasilDaftar', 'Akunmu Berhasil Di Buat :D');
    }

    public function view_Loginpage()
    {
        return view('auth.login');
    }

    public function login_store( Request $request )
    {
        if ( AuthLogin::attempt($request->only("no_hp", "password")) ) {

            $second = 1;
            $response = new Response(redirect("/Furnicraft/home")->with('berhasilLogin', 'Login Berhasil Di Lakukan'));
            if ( $request->has("remember") ) {
                $response->withCookie(cookie('1202204108', 'Rofi', $second));
                return $response;

            } else {
                return redirect("/Furnicraft/home")->with('berhasilLogin', 'Login Berhasil Di Lakukan');
            }

        } else {
            return redirect("/account/login")->with("wrongLogin","No Hp dan Password ada yang Salah");
        }
    }

    public function logout()
    {
        AuthLogin::logout();
        return redirect("/")->with("logout","Sudah berhasil Logout");
    }

    public function profile_page()
    {
        return view('auth.profile');
    }

    public function tambah_alamat($id, Request $request)
    {
        $alamat = $request->input('alamat');
        DB::table('users')
        ->where('id', '=', AuthLogin::user()->id)
        ->update([
            'alamat' => $alamat,
        ]);

        return redirect('/pesanan')->with('alamatSukses', 'Alamatmu Berhasil Di Tambahkan');
    }

    public function ubah_alamat( Request $request )
    {
        $alamat = $request->input('alamat');
        DB::table('users')
        ->where('id', '=', AuthLogin::user()->id)
        ->update([
            'alamat' => $alamat,
        ]);

        return redirect('/pesanan')->with('alamatSukses', 'Alamatmu Berhasil Di Ubah');
    }

    public function password_page()
    {
        return view('auth.ubahPassword');
    }

    public function change_password(Request $request)
    {
        $this->validate($request, [
            'current_password' => ['required'],
            'password' => '|confirmed|min:5'
        ]);

        $password = $request->input('password');
        $password = Hash::make($request->password);

        if( Hash::check($request->current_password, auth()->user()->password) ) {
            DB::table('users')
            ->where('id', '=', AuthLogin::user()->id)
            ->update([
                'password' => $password,
            ]);

            return redirect('/Furnicraft/home')->with('passwordUpdate', 'Password Kamu Sukses Di Ubah');
        } else {
            return redirect('/account/ubah-password')->with('error', "Kamu Salah Input Password");
        }

        throw ValidationException::withMessages([
            'current_password' => "Password Invalid"
        ]);

    }
}
