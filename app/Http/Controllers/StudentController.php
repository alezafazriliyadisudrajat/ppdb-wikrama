<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Console\View\Components\Alert;

class StudentController extends Controller
{
    public function index(){
        return view('index');
    }

    public function register(){
        return view('register.register');
    }
    public function loginstore(Request $request){
        $credential = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
    }

    public function dashboard(){
        return view('user.dashboard');
    }
    public function registrasi(Request $request){
        $request->validate([
            'nisn'=>'required',
            'jk'=>'required',
            'email'=>'required',
            'nama'=>'required',
            'no_hp_ayah'=>'required',
            'no_hp_ibu'=>'required',
            'no_hp_anak'=>'required',
            'asal_sekolah'=>'required',
        ]);

        $data = Student::create([
            'nisn'=>$request->nisn,
            'jk'=>$request->jk,
            'email'=>$request->email,
            'nama'=>$request->nama,
            'no_hp_ayah'=>$request->no_hp_ayah,
            'no_hp_ibu'=>$request->no_hp_ibu,
            'no_hp_anak'=>$request->no_hp_anak,
            'asal_sekolah'=>$request->asal_sekolah,
        ]);

        User::create([
            'name'=>$request->nama,
            'email'=>$request->email,
            'password'=> Hash::make($request->nisn),
        ]);

        return view('pdf.pdf', compact('data'));
    }
    public function login(){
        return view('login.login');
    }
    public function loginpage(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard')->with('success', 'kamu berhasil login');
        }

        return back()->with('error', 'Login Gagal!');
    }
}
